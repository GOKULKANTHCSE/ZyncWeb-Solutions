import * as THREE from 'three';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('bg-canvas');
    if (!canvas) return;

    // Scene Setup
    const scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(0x020210, 0.002); // Deep Navy Fog

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 30;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    // Particles (The Consellation)
    const geometry = new THREE.BufferGeometry();
    const count = 400;
    const positions = new Float32Array(count * 3);
    const colors = new Float32Array(count * 3);

    // Brand Colors
    const color1 = new THREE.Color('#255BA9'); // Brand Blue
    const color2 = new THREE.Color('#3FBFB8'); // Teal

    for (let i = 0; i < count; i++) {
        positions[i * 3] = (Math.random() - 0.5) * 80;     // x
        positions[i * 3 + 1] = (Math.random() - 0.5) * 80; // y
        positions[i * 3 + 2] = (Math.random() - 0.5) * 80; // z

        // Randomly mix brand colors
        const mixedColor = Math.random() > 0.5 ? color1 : color2;
        colors[i * 3] = mixedColor.r;
        colors[i * 3 + 1] = mixedColor.g;
        colors[i * 3 + 2] = mixedColor.b;
    }

    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    const material = new THREE.PointsMaterial({
        size: 0.3,
        vertexColors: true,
        transparent: true,
        opacity: 0.8
    });

    const particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Connecting Lines
    const lineMaterial = new THREE.LineBasicMaterial({
        color: 0x255BA9,
        transparent: true,
        opacity: 0.15
    });

    const linesGeometry = new THREE.BufferGeometry();
    const lines = new THREE.LineSegments(linesGeometry, lineMaterial);
    scene.add(lines);

    // ================= FLOATING GEOMETRY (TECH EDITION) =================
    const shapeGroup = new THREE.Group();
    scene.add(shapeGroup);

    // Geometry 1: Main Data Cube (Wireframe)
    const geo1 = new THREE.BoxGeometry(5, 5, 5);
    const mat1 = new THREE.MeshBasicMaterial({ color: 0x3FBFB8, wireframe: true, transparent: true, opacity: 0.2 });
    const mesh1 = new THREE.Mesh(geo1, mat1);
    mesh1.position.set(-18, 4, -10);
    shapeGroup.add(mesh1);

    // Geometry 2: Floating Server Block (Solid Glassy)
    const geo2 = new THREE.BoxGeometry(3, 8, 3);
    const mat2 = new THREE.MeshBasicMaterial({ color: 0x255BA9, wireframe: true, transparent: true, opacity: 0.15 });
    const mesh2 = new THREE.Mesh(geo2, mat2);
    mesh2.position.set(18, -4, -15);
    shapeGroup.add(mesh2);

    // Geometry 3: Scattered Data Packets (Small Cubes)
    for(let i=0; i<8; i++) {
        const geo3 = new THREE.BoxGeometry(0.8, 0.8, 0.8);
        const mat3 = new THREE.MeshBasicMaterial({ color: 0xffffff, wireframe: true, transparent: true, opacity: 0.15 });
        const mesh3 = new THREE.Mesh(geo3, mat3);
        mesh3.position.set((Math.random()-0.5)*50, (Math.random()-0.5)*40, (Math.random()-0.5)*20);
        shapeGroup.add(mesh3);
    }

    // Geometry 4: Digital Grid Floor (Abstract)
    const gridHelper = new THREE.GridHelper(60, 20, 0x255BA9, 0x1a1f35);
    gridHelper.position.set(0, -15, 0);
    gridHelper.rotation.x = 0.2; // Slight tilt
    scene.add(gridHelper);

    // =====================================================

    // Mouse Interaction
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;

    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX - windowHalfX);
        mouseY = (event.clientY - windowHalfY);
    });

    // Animation Loop
    const clock = new THREE.Clock();

    const animate = () => {
        requestAnimationFrame(animate);

        const delta = clock.getDelta();

        targetX = mouseX * 0.001;
        targetY = mouseY * 0.001;

        particles.rotation.y += 0.005 * (targetX - particles.rotation.y);
        particles.rotation.x += 0.005 * (targetY - particles.rotation.x);

        // Slow automatic rotation
        particles.rotation.z += 0.0005;

        // Rotate Floating Shapes
        mesh1.rotation.x += 0.002;
        mesh1.rotation.y += 0.003;
        mesh2.rotation.x -= 0.002;
        mesh2.rotation.y -= 0.002;
        shapeGroup.rotation.y = mouseX * 0.0005;
        
        // Dynamic Lines Update (Heavy, optimize by distance)
        const nodePositions = particles.geometry.attributes.position.array;
        const linePositions = [];

        // Check distance between points
        for (let i = 0; i < count; i++) {
            for (let j = i + 1; j < count; j++) {
                const dx = nodePositions[i * 3] - nodePositions[j * 3];
                const dy = nodePositions[i * 3 + 1] - nodePositions[j * 3 + 1];
                const dz = nodePositions[i * 3 + 2] - nodePositions[j * 3 + 2];
                const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

                if (dist < 8) { // Connection threshold
                    linePositions.push(
                        nodePositions[i * 3], nodePositions[i * 3 + 1], nodePositions[i * 3 + 2],
                        nodePositions[j * 3], nodePositions[j * 3 + 1], nodePositions[j * 3 + 2]
                    );
                }
            }
        }

        lines.geometry.setAttribute('position', new THREE.Float32BufferAttribute(linePositions, 3));

        renderer.render(scene, camera);
    };

    animate();

    // Resize Handler
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
});
