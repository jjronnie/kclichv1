    <nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border ">
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

                    <a href="features.html"
                        class="nav-link text-foreground hover:text-primary transition-colors">Features</a>
                    <a href="about.html" class="nav-link text-foreground hover:text-primary transition-colors">About</a>
                    <a href="contact.html"
                        class="nav-link text-foreground hover:text-primary transition-colors">Contact</a>

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