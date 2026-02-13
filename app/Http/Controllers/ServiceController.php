<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = [
        'web-development' => [
            'title' => 'Web Development',
            'category' => 'Engineering',
            'icon' => 'fas fa-code',
            'description' => 'Scalable, secure, and high-performance websites built with modern technologies.',
            'long_description' => "At ZyncWeb Solutions, we don't just write code; we architect digital foundations. Our web development services are tailored to meet the specific needs of your business, ensuring scalability, security, and speed.\n\nFrom simple landing pages to complex enterprise-level web applications, we leverage the power of Laravel and modern frontend frameworks to deliver exceptional results.",
            'benefits' => [
                'Custom Backend Architecture',
                'API Integration & Development',
                'Secure & Scalable Infrastructure',
                'Performance Optimization',
                'SEO-Friendly Code Structure'
            ],
            'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200'
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design',
            'category' => 'Design',
            'icon' => 'fas fa-layer-group',
            'description' => 'User-centric design that creates intuitive and engaging digital experiences.',
            'long_description' => "Great design is invisible. It guides the user effortlessly through your digital product. Our UI/UX design process starts with understanding your users and their needs.\n\nWe create wireframes, prototypes, and high-fidelity mockups that not only look beautiful but also function seamlessly. We believe that good design is good business.",
            'benefits' => [
                'User Research & Analysis',
                'Wireframing & Prototyping',
                'Interactive Interface Design',
                'Design System Creation',
                'Usability Testing'
            ],
            'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=1200'
        ],
        'ecommerce-development' => [
            'title' => 'E-Commerce Development',
            'category' => 'Engineering',
            'icon' => 'fas fa-shopping-cart',
            'description' => 'Powerful online stores that convert visitors into loyal customers.',
            'long_description' => "Our e-commerce solutions are built to scale. Whether you’re selling 10 products or 10,000, we provide the tools you need to manage your store with ease.\n\nFrom custom cart logic to seamless payment integrations, we focus on minimizing friction in the buying process to maximize your revenue.",
            'benefits' => [
                'Conversion-Focused UI',
                'Secure Payment Gateways',
                'Inventory Management',
                'Customer Loyalty Integration',
                'High-Traffic Scalability'
            ],
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1200'
        ],
        'seo-optimization' => [
            'title' => 'SEO Optimization',
            'category' => 'Marketing',
            'icon' => 'fas fa-search',
            'description' => 'Strategic search engine optimization to drive organic growth.',
            'long_description' => "SEO is a marathon, not a sprint. We combine technical audits, content strategy, and link building to ensure your business stays visible where your customers are looking.\n\nOur data-driven approach ensures you outrank the competition for the terms that matter most to your bottom line.",
            'benefits' => [
                'On-Page Semantic SEO',
                'Technical Speed Audit',
                'Strategic Keyword Research',
                'High-Authority Link Building',
                'Monthly Performance Reports'
            ],
            'image' => 'https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=1200'
        ],
        'performance-optimization' => [
            'title' => 'Performance Optimization',
            'category' => 'Engineering',
            'icon' => 'fas fa-tachometer-alt',
            'description' => 'Lightning-fast load times through specialized technical fine-tuning.',
            'long_description' => "Every millisecond counts. We dive deep into your site's core to eliminate bottlenecks, optimize assets, and refine server response times.\n\nA faster site means better user retention, higher conversion rates, and a significant boost in search engine rankings.",
            'benefits' => [
                'Core Web Vitals Boost',
                'Database Query Tuning',
                'Image & Asset Compression',
                'CDN & Caching Strategy',
                'Server-Level Optimization'
            ],
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200'
        ],
        'brand-identity-design' => [
            'title' => 'Brand Identity Design',
            'category' => 'Design',
            'icon' => 'fas fa-pen-nib',
            'description' => 'Comprehensive branding packages that define your unique market position.',
            'long_description' => "Your brand is more than just a logo. It’s the emotional connection your customers have with your business. We help you build that connection through consistent, powerful visuals.\n\nWe create a unified brand language that works everywhere—from your website to your social media and physical collateral.",
            'benefits' => [
                'Visual Strategy & Direction',
                'Complete Brand Guidelines',
                'Custom Typography & Palette',
                'Social Media Style Kits',
                'Logo Evolution Systems'
            ],
            'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200'
        ],
        'graphic-design' => [
            'title' => 'Graphic Design',
            'category' => 'Design',
            'icon' => 'fas fa-paint-brush',
            'description' => 'Visual storytelling that communicates your brand value instantly.',
            'long_description' => "Your brand's visual identity is your first impression. We help you make it count. Our graphic design services cover everything from logo design to full-scale branding packages.",
            'benefits' => [
                'Logo & Brand Identity',
                'Marketing Materials',
                'Social Media Graphics',
                'Infographics & Illustrations',
                'Packaging Design'
            ],
            'image' => 'https://images.unsplash.com/photo-1626785774573-4b799314346d?auto=format&fit=crop&w=1200'
        ],
        'hosting-maintenance' => [
            'title' => 'Hosting & Maintenance',
            'category' => 'Engineering',
            'icon' => 'fas fa-server',
            'description' => 'Reliable hosting and proactive maintenance to keep your business online 24/7.',
            'long_description' => "Launching a website is just the beginning. Keeping it running smoothly requires ongoing attention. Our managed hosting and maintenance services take the technical burden off your shoulders.",
            'benefits' => [
                '99.9% Uptime Guarantee',
                'Daily Automated Backups',
                'Security Shield & SSL',
                'Core & Plugin Updates',
                '24/7 Priority Support'
            ],
            'image' => 'https://images.unsplash.com/photo-1558494949-ef248798c66e?auto=format&fit=crop&w=1200'
        ],
        'mobile-app-dev' => [
            'title' => 'Mobile App Development',
            'category' => 'Engineering',
            'icon' => 'fas fa-mobile-alt',
            'description' => 'Native and cross-platform mobile experiences that put your business in customers pockets.',
            'long_description' => "Reach your users wherever they are. We build high-performance iOS and Android applications using React Native and Flutter for maximum platform reach.",
            'benefits' => [
                'Cross-platform synchronization',
                'Offline-first capabilities',
                'App Store/Play Store management'
            ],
            'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1200'
        ],
        'digital-strategy' => [
            'title' => 'Digital Strategy',
            'category' => 'Marketing',
            'icon' => 'fas fa-chess-knight',
            'description' => 'Transformative roadmap to help you navigate the noise and achieve measurable digital growth.',
            'long_description' => "Don’t just guess – grow. We analyze your market and competitors to build a comprehensive digital strategy that aligns with your business goals.",
            'benefits' => [
                'In-depth market analysis',
                'ROI-focused growth roadmap',
                'Competitive benchmarking'
            ],
            'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200'
        ],
        'content-marketing' => [
            'title' => 'Content Marketing',
            'category' => 'Marketing',
            'icon' => 'fas fa-feather-alt',
            'description' => 'High-converting copy and content that builds authority and engages your audience.',
            'long_description' => "Words that work. We craft compelling narratives, blog posts, and website copy that not only informs but drives your users to take action.",
            'benefits' => [
                'Conversion-focused copywriting',
                'Strategic content planning',
                'SEO-optimized blog management'
            ],
            'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1200'
        ],
        'social-media-mgmt' => [
            'title' => 'Social Media Management',
            'category' => 'Marketing',
            'icon' => 'fas fa-share-alt',
            'description' => 'Strategic social presence that builds community and drives brand awareness.',
            'long_description' => "Engage with your audience where they live. We manage your social profiles with consistent, high-quality content that builds trust and brand loyalty.",
            'benefits' => [
                'Multi-platform content strategy',
                'Community engagement & growth',
                'Advanced social analytics'
            ],
            'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1200'
        ]
    ];

    public function index()
    {
        return view('pages.services', ['services' => $this->services]);
    }

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }
        return view('pages.service-details', ['service' => $this->services[$slug]]);
    }
}
