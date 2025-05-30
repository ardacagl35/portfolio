<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <meta name="description" content="@yield('meta_description', 'Web Developer Portfolio')">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #f8fafc;
            --accent-color: #3b82f6;
            --text-color: #1e293b;
            --gradient-start: #3b82f6;
            --gradient-end: #8b5cf6;
        }
        
        html, body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--primary-color);
            color: var(--text-color);
        }
        
        .section {
            padding: 5rem 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        }

        .hover-gradient {
            transition: all 0.3s ease;
        }

        .hover-gradient:hover {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            color: white;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.98);
            z-index: 100;
            padding: 2rem;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            visibility: hidden;
        }

        .mobile-menu.active {
            transform: translateX(0);
            visibility: visible;
        }

        .mobile-menu .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            color: var(--text-color);
        }

        .mobile-menu .nav-links {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .mobile-menu .nav-links a {
            font-size: 1.25rem;
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .mobile-menu .nav-links a:hover {
            color: var(--accent-color);
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-sm z-50 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-xl font-bold gradient-text">Portfolio</a>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Home</a>
                    <a href="{{ url('/#about') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">About</a>
                    <a href="{{ url('/#skills') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Skills</a>
                    <a href="{{ url('/#projects') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Projects</a>
                    <a href="{{ url('/#experience') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Experience</a>
                    <a href="{{ url('/#contact') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Contact</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Blog</a>
                </div>
                <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-blue-500 transition-colors duration-300">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <button id="close-menu" class="close-btn">
            <i class="fas fa-times"></i>
        </button>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/#about') }}">About</a>
            <a href="{{ url('/#skills') }}">Skills</a>
            <a href="{{ url('/#projects') }}">Projects</a>
            <a href="{{ url('/#experience') }}">Experience</a>
            <a href="{{ url('/#contact') }}">Contact</a>
            <a href="{{ route('blog.index') }}">Blog</a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <div class="text-center text-gray-600">
                <p>&copy; Uğur Arda Çağlı {{ date('Y') }} All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            mirror: true
        });

        // Mobile Menu Functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    </script>
</body>
</html> 