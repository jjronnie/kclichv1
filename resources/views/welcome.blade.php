
<x-guest-layout>
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

                        <div
                            class="flex md:grid md:grid-cols-4 lg:grid-cols-6 gap-4 overflow-x-auto whitespace-nowrap pb-4 scrollbar-hide">

                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
                                <div class="text-lg font-semibold">.com</div>
                                <div class="text-sm text-muted-foreground">$12.99/year</div>
                            </div>
                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
                                <div class="text-lg font-semibold">.net</div>
                                <div class="text-sm text-muted-foreground">$14.99/year</div>
                            </div>
                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
                                <div class="text-lg font-semibold">.org</div>
                                <div class="text-sm text-muted-foreground">$13.99/year</div>
                            </div>
                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
                                <div class="text-lg font-semibold">.io</div>
                                <div class="text-sm text-muted-foreground">$45.99/year</div>
                            </div>
                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
                                <div class="text-lg font-semibold">.dev</div>
                                <div class="text-sm text-muted-foreground">$17.99/year</div>
                            </div>
                            <div
                                class="inline-block md:block text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors mr-4 md:mr-0 min-w-[120px]">
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
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.com</div>
                                <div class="text-sm text-muted-foreground">$12.99/year</div>
                            </div>
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.net</div>
                                <div class="text-sm text-muted-foreground">$14.99/year</div>
                            </div>
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.org</div>
                                <div class="text-sm text-muted-foreground">$13.99/year</div>
                            </div>
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.io</div>
                                <div class="text-sm text-muted-foreground">$45.99/year</div>
                            </div>
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
                                <div class="text-lg font-semibold">.dev</div>
                                <div class="text-sm text-muted-foreground">$17.99/year</div>
                            </div>
                            <div
                                class="text-center p-4 bg-card rounded-lg border border-border hover:border-primary transition-colors">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
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
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Easy Management</h3>
                            </div>
                            <p class="text-muted-foreground">User-friendly control panel with one-click installations
                            </p>
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
</x-guest-layout>
  
    
  
