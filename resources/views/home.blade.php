@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto text-center">
            <div data-aos="fade-up" class="max-w-3xl mx-auto">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4 sm:mb-6">
                    <span class="gradient-text">Uğur Arda Çağlı</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-6 sm:mb-8">Full Stack Web Developer</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#contact" class="gradient-bg text-white px-6 sm:px-8 py-3 rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">Contact</a>
                    <a href="#projects" class="border-2 border-blue-500 text-blue-500 px-6 sm:px-8 py-3 rounded-lg hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1">My Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-8 sm:py-12 bg-gradient-to-br from-blue-50 to-purple-50 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8">
                <div class="text-center" data-aos="fade-up">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text mb-2">2+</div>
                    <p class="text-sm sm:text-base text-gray-600">Years Experience</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text mb-2">15+</div>
                    <p class="text-sm sm:text-base text-gray-600">Projects Completed</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text mb-2">10+</div>
                    <p class="text-sm sm:text-base text-gray-600">Happy Clients</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text mb-2">5+</div>
                    <p class="text-sm sm:text-base text-gray-600">Technologies Mastered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section bg-white px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 gradient-text" data-aos="fade-up">Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up">
                    <div class="text-blue-500 mb-4">
                        <i class="fas fa-code text-3xl sm:text-4xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4 gradient-text">Web Development</h3>
                    <p class="text-sm sm:text-base text-gray-600">Custom web applications built with modern technologies like Laravel and React.</p>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-purple-500 mb-4">
                        <i class="fas fa-mobile-alt text-3xl sm:text-4xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4 gradient-text">Responsive Design</h3>
                    <p class="text-sm sm:text-base text-gray-600">Mobile-first, responsive websites that work perfectly on all devices.</p>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-green-500 mb-4">
                        <i class="fas fa-database text-3xl sm:text-4xl"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4 gradient-text">Database Solutions</h3>
                    <p class="text-sm sm:text-base text-gray-600">Efficient database design and optimization for your applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">Client Testimonials</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4">
                            JD
                        </div>
                        <div>
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-gray-600 text-sm">CEO, Tech Company</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Working with Uğur was a pleasure. He delivered our project on time and exceeded our expectations."</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold mr-4">
                            JS
                        </div>
                        <div>
                            <h4 class="font-semibold">Jane Smith</h4>
                            <p class="text-gray-600 text-sm">Project Manager, Startup</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Uğur's attention to detail and technical expertise made our project a success. Highly recommended!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">My Process</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up">
                    <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-xl font-semibold mb-2 gradient-text">Discovery</h3>
                    <p class="text-gray-600">Understanding your needs and project requirements</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-full bg-purple-500 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-xl font-semibold mb-2 gradient-text">Planning</h3>
                    <p class="text-gray-600">Creating a detailed project roadmap</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-xl font-semibold mb-2 gradient-text">Development</h3>
                    <p class="text-gray-600">Building your solution with best practices</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                    <h3 class="text-xl font-semibold mb-2 gradient-text">Launch</h3>
                    <p class="text-gray-600">Testing and deploying your project</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="section bg-gradient-to-br from-blue-50 to-purple-50 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 gradient-text" data-aos="fade-up">Latest Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                @foreach($posts as $post)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm card-hover" data-aos="fade-up">
                    <div class="relative overflow-hidden group">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4 sm:p-6">
                            <div class="text-white">
                                <h3 class="text-lg sm:text-xl font-semibold mb-2">{{ $post->title }}</h3>
                                <p class="text-sm">{{ Str::limit($post->excerpt, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:text-blue-600">Read More →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('blog.index') }}" class="inline-block gradient-bg text-white px-6 sm:px-8 py-3 rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">View All Posts</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
   

    <!-- Skills Section -->
    <section id="skills" class="section bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Frontend -->
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-semibold mb-4 gradient-text">Frontend</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fab fa-html5 text-blue-500 mr-2"></i>
                            HTML5 & CSS3
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-js text-yellow-500 mr-2"></i>
                            JavaScript (ES6+)
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-react text-blue-400 mr-2"></i>
                            React.js
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-css3-alt text-blue-600 mr-2"></i>
                            Tailwind CSS
                        </li>
                    </ul>
                </div>
                
                <!-- Backend -->
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-semibold mb-4 gradient-text">Backend</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fab fa-php text-purple-500 mr-2"></i>
                            PHP
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-laravel text-red-500 mr-2"></i>
                            Laravel
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-node-js text-green-500 mr-2"></i>
                            Node.js
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-database text-blue-500 mr-2"></i>
                            MySQL
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-python text-blue-500 mr-2"></i>
                            Python
                        </li>
                    </ul>
                </div>
                
                <!-- Tools -->
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-semibold mb-4 gradient-text">Tools</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fab fa-git-alt text-orange-500 mr-2"></i>
                            Git & GitHub
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-docker text-blue-500 mr-2"></i>
                            ...
                        </li>
                   
                        <li class="flex items-center">
                            <i class="fab fa-figma text-purple-500 mr-2"></i>
                            ...
                        </li>
                    </ul>
                </div>
                
                <!-- Soft Skills -->
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-xl font-semibold mb-4 gradient-text">Soft Skills</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-puzzle-piece text-green-500 mr-2"></i>
                            Problem Solving
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-users text-blue-500 mr-2"></i>
                            Teamwork
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-comments text-purple-500 mr-2"></i>
                            Communication
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">My Projects</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm card-hover" data-aos="fade-up">
                    <div class="relative overflow-hidden group">
                        <img src="/images/project1.jpg" alt="Project 1" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="text-white">
                                <h3 class="text-xl font-semibold mb-2">Project 1</h3>
                                <p class="text-sm">Project 1 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-github text-xl"></i></a>
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fas fa-external-link-alt text-xl"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden group">
                        <img src="/images/project2.jpg" alt="Project 2" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="text-white">
                                <h3 class="text-xl font-semibold mb-2">Project 2</h3>
                                <p class="text-sm">Project 2 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-github text-xl"></i></a>
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fas fa-external-link-alt text-xl"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden group">
                        <img src="/images/project3.jpg" alt="Project 3" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="text-white">
                                <h3 class="text-xl font-semibold mb-2">Project 3</h3>
                                <p class="text-sm">Project 3 Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-github text-xl"></i></a>
                            <a href="#" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fas fa-external-link-alt text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">Experience</h2>
            <div class="max-w-3xl mx-auto">
                <!-- Experience Item 1 -->
                <div class="mb-8" data-aos="fade-up">
                    <div class="bg-white p-6 rounded-lg shadow-sm card-hover">
                        <a target="_blank" href="https://yedinet.com" class="text-xl font-semibold mb-2 gradient-text">YediNet</a>
                        <p class="text-gray-600 mb-2">Full-stack Web Developer • 2025 - Ongoing</p>
                        <p class="text-gray-600">
                        - Gained theoretical and hands-on experience in modern software development processes. 
- Worked with technologies such as HTML, CSS, PHP, Laravel, JavaScript, and React. 
- Developed skills in building web-based applications, database management (MySQL, SQLite), and version control (Git). 
- Improved abilities in teamwork, problem-solving, and task management. 
- Contributed to small-scale tasks in corporate projects under mentorship guidance.
                        </p>
                    </div>
                </div>
                
                <!-- Experience Item 2 -->
               
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">Contact</h2>
            <div class="max-w-2xl mx-auto">
                <form id="contactForm" class="space-y-6" data-aos="fade-up">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                        <div class="text-red-500 text-sm mt-1 hidden" id="nameError"></div>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">E-mail</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                        <div class="text-red-500 text-sm mt-1 hidden" id="emailError"></div>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"></textarea>
                        <div class="text-red-500 text-sm mt-1 hidden" id="messageError"></div>
                    </div>
                    <button type="submit" class="w-full gradient-bg text-white px-8 py-3 rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <span class="inline-block">Send</span>
                        <span class="hidden" id="loadingSpinner">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                    </button>
                    <div id="successMessage" class="hidden text-green-500 text-center mt-4"></div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            document.querySelectorAll('.text-red-500').forEach(el => el.classList.add('hidden'));
            
            // Show loading spinner
            document.querySelector('#loadingSpinner').classList.remove('hidden');
            document.querySelector('button[type="submit"] span:first-child').classList.add('hidden');
            
            // Get form data
            const formData = new FormData(this);
            
            // Send request
            fetch('/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                // Hide loading spinner
                document.querySelector('#loadingSpinner').classList.add('hidden');
                document.querySelector('button[type="submit"] span:first-child').classList.remove('hidden');
                
                if (data.errors) {
                    // Show validation errors
                    Object.keys(data.errors).forEach(field => {
                        const errorElement = document.getElementById(field + 'Error');
                        errorElement.textContent = data.errors[field][0];
                        errorElement.classList.remove('hidden');
                    });
                } else {
                    // Show success message
                    const successMessage = document.getElementById('successMessage');
                    successMessage.textContent = data.message;
                    successMessage.classList.remove('hidden');
                    
                    // Reset form
                    this.reset();
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        successMessage.classList.add('hidden');
                    }, 5000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Hide loading spinner
                document.querySelector('#loadingSpinner').classList.add('hidden');
                document.querySelector('button[type="submit"] span:first-child').classList.remove('hidden');
            });
        });
    </script>

    <section id="about" class="section bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12 gradient-text" data-aos="fade-up">About Me</h2>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div data-aos="fade-right" class="float-animation">
                        <img src="/images/profile.jpg" alt="Profile" class="rounded-lg shadow-lg w-full">
                    </div>
                    <div data-aos="fade-left">
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        I am a software developer with a strong interest in building web applications using modern technologies like PHP, Laravel, and React. I enjoy problem-solving, creating clean and user-friendly interfaces, and continuously learning new tools and techniques. I am currently expanding my expertise in backend development, while also working on real-world projects. My goal is to contribute to impactful projects and become a versatile full-stack developer.

                        </p>
                        <div class="flex space-x-6">
                            <a target="_blank" href="https://github.com/ardacagl35" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-github text-3xl"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/uğur-arda-çağlı" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-linkedin text-3xl"></i></a>
                            <a target="_blank" href="https://x.com/ardacagll" class="text-gray-600 hover:text-blue-500 transform hover:scale-110 transition-all duration-300"><i class="fab fa-twitter text-3xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 