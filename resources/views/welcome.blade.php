<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kclich - Professional Web Hosting Solutions</title>
    <meta name="description" content="Professional web hosting with 99.9% uptime guarantee. Shared hosting, VPS, and dedicated servers with 24/7 support. Fast, secure, and reliable hosting for your business." />
    <link rel="stylesheet" href="assets/css/styles.css">
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-gradient">
                        kclich
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="nav-link text-foreground hover:text-primary transition-colors">Home</a>
                    
                    <div class="dropdown">
                        <button class="nav-link text-foreground hover:text-primary transition-colors flex items-center">
                            Hosting <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="hosting.html" class="dropdown-item">All Plans</a>
                            <a href="hosting.html#shared" class="dropdown-item">Shared Hosting</a>
                            <a href="hosting.html#vps" class="dropdown-item">VPS Hosting</a>
                            <a href="hosting.html#dedicated" class="dropdown-item">Dedicated Servers</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <button class="nav-link text-foreground hover:text-primary transition-colors flex items-center">
                            Domains <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="domains.html" class="dropdown-item">Domain Search</a>
                            <a href="domain-transfer.html" class="dropdown-item">Domain Transfer</a>
                            <a href="domains.html#pricing" class="dropdown-item">Domain Pricing</a>
                        </div>
                    </div>
                    
                    <a href="features.html" class="nav-link text-foreground hover:text-primary transition-colors">Features</a>
                    <a href="about.html" class="nav-link text-foreground hover:text-primary transition-colors">About</a>
                    <a href="contact.html" class="nav-link text-foreground hover:text-primary transition-colors">Contact</a>
                    
                    <div class="dropdown">
                        <button class="nav-link text-foreground hover:text-primary transition-colors flex items-center">
                            Support <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="contact.html" class="dropdown-item">Contact Support</a>
                            <a href="#" class="dropdown-item">Knowledge Base</a>
                            <a href="#" class="dropdown-item">System Status</a>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-4">
                      @guest <a href="{{ route('login')}}" class="btn btn-outline">Login</a>
                    <a href="{{ route('register')}}" class="btn btn-primary">Get Started</a>
                       @endguest

                         @auth 
                    <a href="{{ route('dashboard')}}" class="btn btn-primary">Dashboard</a>
                       @endauth
                </div>
                
                <button class="md:hidden text-foreground" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-background border-t border-border">
                <a href="index.html" class="block px-3 py-2 text-foreground hover:text-primary">Home</a>
                <a href="hosting.html" class="block px-3 py-2 text-foreground hover:text-primary">Hosting</a>
                <a href="domains.html" class="block px-3 py-2 text-foreground hover:text-primary">Domains</a>
                <a href="features.html" class="block px-3 py-2 text-foreground hover:text-primary">Features</a>
                <a href="about.html" class="block px-3 py-2 text-foreground hover:text-primary">About</a>
                <a href="contact.html" class="block px-3 py-2 text-foreground hover:text-primary">Contact</a>
                <div class="px-3 py-2 space-y-2">

                    @guest
                    <a href="{{ route('login')}}" class="btn btn-outline w-full">Login</a>
                    <a href="{{ route('register')}}" class="btn btn-primary w-full">Get Started</a>


                    @endguest

                     @auth 
                    <a href="{{ route('dashboard')}}" class="btn btn-primary w-full">Dashboard</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
    <!-- Hero Section with Domain Search -->
<section class="relative pt-16 pb-32 overflow-hidden">
    <!-- Backgrounds same as original hero -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20" 
         style="background-image: url('assets/images/hero-bg.jpg')"></div>
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="absolute inset-0 tech-grid opacity-30"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center pt-20">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
                Find Your Perfect <span class="text-gradient">Domain</span>
            </h2>
            <p class="text-xl md:text-2xl text-muted-foreground mb-8 max-w-3xl mx-auto animate-slide-up">
                Search and register domains from over 500 extensions. Get started with free privacy protection.
            </p>

            <!-- Domain Search Box -->
            <div class="max-w-4xl mx-auto animate-slide-up">
                <div class="flex flex-col md:flex-row gap-4 mb-8">
                    <div class="flex-1">
                        <input type="text" id="domain-search" placeholder="Enter your domain name..." 
                               class="w-full px-6 py-4 text-lg bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <button class="btn btn-primary px-8 py-4 text-lg" onclick="searchDomain()">
                        Search <i class="fas fa-search ml-2"></i>
                    </button>
                </div>

                <!-- Popular Domains -->

                <div class="flex md:grid md:grid-cols-4 lg:grid-cols-6 gap-4 overflow-x-auto whitespace-nowrap pb-4 scrollbar-hide">
 
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.com</div>
        <div class="text-sm text-muted-foreground">$12.99/year</div>
    </div>
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.net</div>
        <div class="text-sm text-muted-foreground">$14.99/year</div>
    </div>
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.org</div>
        <div class="text-sm text-muted-foreground">$13.99/year</div>
    </div>
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.io</div>
        <div class="text-sm text-muted-foreground">$45.99/year</div>
    </div>
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.dev</div>
        <div class="text-sm text-muted-foreground">$17.99/year</div>
    </div>
    <div class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
        <div class="text-lg font-semibold">.tech</div>
        <div class="text-sm text-muted-foreground">$24.99/year</div>
    </div>
</div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-8 animate-slide-up">
                <a href="domains.html" class="btn btn-outline">
                    View All Domain Services <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


        <!-- Stats Section -->
        <section class="py-16 bg-card/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gradient mb-2">50K+</div>
                        <div class="text-muted-foreground">Active Websites</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gradient mb-2">99.9%</div>
                        <div class="text-muted-foreground">Uptime Guarantee</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gradient mb-2">24/7</div>
                        <div class="text-muted-foreground">Expert Support</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gradient mb-2">15+</div>
                        <div class="text-muted-foreground">Global Locations</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Domain Search Section -->
        <section class="py-24 bg-gradient-to-br from-primary/5 via-background to-accent/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Find Your Perfect <span class="text-gradient">Domain</span>
                    </h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Search and register domains from over 500 extensions. Get started with free privacy protection.
                    </p>
                </div>
                
                <div class="max-w-4xl mx-auto">
                    <div class="domain-search-container">
                        <div class="flex flex-col md:flex-row gap-4 mb-8">
                            <div class="flex-1">
                                <input type="text" id="domain-search" placeholder="Enter your domain name..." 
                                       class="w-full px-6 py-4 text-lg bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <button class="btn btn-primary px-8 py-4 text-lg" onclick="searchDomain()">
                                Search <i class="fas fa-search ml-2"></i>
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.com</div>
                                <div class="text-sm text-muted-foreground">$12.99/year</div>
                            </div>
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.net</div>
                                <div class="text-sm text-muted-foreground">$14.99/year</div>
                            </div>
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.org</div>
                                <div class="text-sm text-muted-foreground">$13.99/year</div>
                            </div>
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.io</div>
                                <div class="text-sm text-muted-foreground">$45.99/year</div>
                            </div>
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.dev</div>
                                <div class="text-sm text-muted-foreground">$17.99/year</div>
                            </div>
                            <div class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.tech</div>
                                <div class="text-sm text-muted-foreground">$24.99/year</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <a href="domains.html" class="btn btn-outline">
                        View All Domain Services <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Why Choose <span class="text-gradient">kclich</span>?
                    </h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        We provide enterprise-grade hosting solutions with cutting-edge technology 
                        and exceptional support for your success.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-server text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">99.9% Uptime</h3>
                            </div>
                            <p class="text-muted-foreground">Enterprise-grade infrastructure with guaranteed uptime</p>
                        </div>
                    </div>
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-shield-alt text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Advanced Security</h3>
                            </div>
                            <p class="text-muted-foreground">SSL certificates, DDoS protection, and malware scanning</p>
                        </div>
                    </div>
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-bolt text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Lightning Fast</h3>
                            </div>
                            <p class="text-muted-foreground">SSD storage and global CDN for maximum performance</p>
                        </div>
                    </div>
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-globe text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Global Network</h3>
                            </div>
                            <p class="text-muted-foreground">Data centers worldwide for optimal loading speeds</p>
                        </div>
                    </div>
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">24/7 Support</h3>
                            </div>
                            <p class="text-muted-foreground">Expert technical support available around the clock</p>
                        </div>
                    </div>
                    <div class="card hover-lift bg-card border-border">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Easy Management</h3>
                            </div>
                            <p class="text-muted-foreground">User-friendly control panel with one-click installations</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-gradient-to-r from-primary/10 to-accent/10">
            <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
                <p class="text-xl text-muted-foreground mb-8">
                    Join thousands of satisfied customers who trust kclich for their hosting needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="hosting.html" class="btn btn-hero">
                        Choose Your Plan <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="contact.html" class="btn btn-outline">Contact Sales</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-card border-t border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <h3 class="text-2xl font-bold text-gradient">kclich</h3>
                    </div>
                    <p class="text-muted-foreground mb-6 max-w-md">
                        Professional web hosting solutions with enterprise-grade infrastructure, 
                        advanced security, and 24/7 expert support.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="hosting.html" class="text-muted-foreground hover:text-primary transition-colors">Web Hosting</a></li>
                        <li><a href="hosting.html#vps" class="text-muted-foreground hover:text-primary transition-colors">VPS Hosting</a></li>
                        <li><a href="hosting.html#dedicated" class="text-muted-foreground hover:text-primary transition-colors">Dedicated Servers</a></li>
                        <li><a href="domains.html" class="text-muted-foreground hover:text-primary transition-colors">Domain Registration</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="about.html" class="text-muted-foreground hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="contact.html" class="text-muted-foreground hover:text-primary transition-colors">Contact</a></li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-border mt-8 pt-8 text-center">
                <p class="text-muted-foreground">
                    © 2024 kclich. All rights reserved. | Powered by cutting-edge technology
                </p>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>