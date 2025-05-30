<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Clear existing posts
        Post::truncate();

        $posts = [
            [
                'title' => 'Modern Web Development with Laravel and React',
                'excerpt' => 'Learn how to build modern web applications using Laravel and React, combining the power of PHP with the flexibility of JavaScript.',
                'content' => '<p>In this article, we\'ll explore how to create a modern web application using Laravel and React. We\'ll cover topics such as:</p>
                            <ul>
                                <li>Setting up a Laravel backend with API endpoints</li>
                                <li>Creating a React frontend with modern hooks</li>
                                <li>Implementing authentication and authorization</li>
                                <li>Optimizing performance and user experience</li>
                            </ul>
                            <p>By the end of this article, you\'ll have a solid understanding of how to build full-stack applications using these powerful technologies.</p>',
                'image' => 'https://picsum.photos/800/400?random=1',
                'published_at' => now(),
            ],
            [
                'title' => 'Laravel Best Practices for 2024',
                'excerpt' => 'Discover the latest best practices for Laravel development, including tips for performance optimization and code organization.',
                'content' => '<p>Laravel continues to evolve, and with it, our best practices should too. Here are some key practices to follow in 2024:</p>
                            <ul>
                                <li>Using Laravel\'s latest features effectively</li>
                                <li>Implementing proper caching strategies</li>
                                <li>Writing clean, maintainable code</li>
                                <li>Following SOLID principles</li>
                            </ul>
                            <p>These practices will help you build more robust and maintainable applications.</p>',
                'image' => 'https://picsum.photos/800/400?random=2',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Optimizing React Applications for Better Performance',
                'excerpt' => 'Learn essential techniques for improving the performance of your React applications, from code splitting to memoization.',
                'content' => '<p>Performance optimization is crucial for modern web applications. Here are some key techniques:</p>
                            <ul>
                                <li>Implementing code splitting</li>
                                <li>Using React.memo and useMemo effectively</li>
                                <li>Optimizing bundle size</li>
                                <li>Implementing proper caching strategies</li>
                            </ul>
                            <p>By following these techniques, you can significantly improve your application\'s performance.</p>',
                'image' => 'https://picsum.photos/800/400?random=3',
                'published_at' => now()->subDays(4),
            ],
            // Add your new blog posts here
            [
                'title' => 'Building RESTful APIs with Laravel',
                'excerpt' => 'A comprehensive guide to creating robust and scalable RESTful APIs using Laravel.',
                'content' => '<p>In this guide, we\'ll explore how to build RESTful APIs with Laravel:</p>
                            <ul>
                                <li>Setting up API routes and controllers</li>
                                <li>Implementing authentication with Sanctum</li>
                                <li>API versioning and documentation</li>
                                <li>Error handling and validation</li>
                            </ul>
                            <p>Learn how to create professional-grade APIs that are secure, maintainable, and well-documented.</p>',
                'image' => 'https://picsum.photos/800/400?random=4',
                'published_at' => now()->subDays(6),
            ],
            [
                'title' => 'Advanced CSS Techniques for Modern Web Design',
                'excerpt' => 'Explore advanced CSS techniques to create stunning and responsive web designs.',
                'content' => '<p>Modern web design requires advanced CSS knowledge. Here are some techniques to master:</p>
                            <ul>
                                <li>CSS Grid and Flexbox layouts</li>
                                <li>Custom properties and variables</li>
                                <li>Advanced animations and transitions</li>
                                <li>Responsive design patterns</li>
                            </ul>
                            <p>These techniques will help you create beautiful and responsive web designs.</p>',
                'image' => 'https://picsum.photos/800/400?random=5',
                'published_at' => now()->subDays(8),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
} 