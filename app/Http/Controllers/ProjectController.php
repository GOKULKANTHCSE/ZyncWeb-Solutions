<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projects = [
        'fintech-investment-platform' => [
            'title' => 'FinTech Investment Platform',
            'category' => 'Web Development',
            'short_description' => 'A high-performance trading and investment portal for modern investors.',
            'overview' => 'Our client needed a robust, real-time platform to manage complex investment portfolios. The challenge was to maintain sub-100ms latency while handling thousands of concurrent users and financial data streams.',
            'solution' => 'We built a high-scalability architecture using Laravel and React, integrated with real-time WebSocket feeds. We implemented advanced caching layers and optimized database queries to ensure smooth performance under heavy load.',
            'results' => 'The platform successfully launched with 50,000+ active users, achieving 99.99% uptime and providing investors with a seamless, lag-free trading experience.',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200'
        ],
        'eco-luxury-marketplace' => [
            'title' => 'Eco-Luxury Marketplace',
            'category' => 'E-commerce',
            'short_description' => 'A premium shopping experience for sustainable luxury goods.',
            'overview' => 'A sustainable fashion brand tasked us with creating an e-commerce platform that felt as premium as their products. They needed a design that balanced "Eco" with "High-End" while maintaining fast load times.',
            'solution' => 'We focused on a minimalist, card-based UI with deep visual depth and smooth transitions. The backend was optimized for heavy imagery, and we implemented a custom, frictionless checkout flow.',
            'results' => 'Post-launch, the client saw a 40% increase in conversion rates and a significant improvement in average session duration due to the engaging UI/UX.',
            'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1200'
        ],
        'smart-health-dashboard' => [
            'title' => 'Smart Health Dashboard',
            'category' => 'UI/UX Design',
            'short_description' => 'Intuitive analytics for personal health monitoring.',
            'overview' => 'A health-tech startup needed an interface to make complex biometric data understandable for everyday users. The goal was to transform rows of numbers into actionable insights.',
            'solution' => 'We designed a data-rich yet clean dashboard using dark mode for high contrast. We used interactive GSAP visualizations and prioritized the most critical metrics for easy viewing.',
            'results' => 'The dashboard was praised for its clarity and became a key selling point for the startup, leading to a successful Series A funding round.',
            'image' => 'https://images.unsplash.com/photo-1504868584819-f8e90526354c?auto=format&fit=crop&w=1200'
        ],
        'urban-realty-portal' => [
            'title' => 'Urban Realty Portal',
            'category' => 'Web Development',
            'short_description' => 'A comprehensive property search and management platform.',
            'overview' => 'A leading real estate agency needed to modernize their search interface to compete in a crowded digital market. They required advanced filtering and seamless mobile navigation.',
            'solution' => 'We implemented a fast, client-side search engine with real-time map integration. We focused on card-driven layouts that emphasize property imagery and essential details.',
            'results' => 'The new portal led to a 60% increase in organic traffic and a much higher user engagement score compared to their legacy system.',
            'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200'
        ]
    ];

    public function index()
    {
        return view('pages.projects', ['projects' => $this->projects]);
    }

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->projects)) {
            abort(404);
        }
        return view('pages.project-details', ['project' => $this->projects[$slug]]);
    }
}
