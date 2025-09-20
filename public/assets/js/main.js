// TechTower Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.card, .btn, h1, h2, h3, p').forEach(el => {
        observer.observe(el);
    });

    // Add parallax effect to hero background
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.hero-gradient');
        if (parallax) {
            const speed = scrolled * 0.5;
            parallax.style.transform = `translateY(${speed}px)`;
        }
    });

    // Add hover effects to cards
    document.querySelectorAll('.hover-lift').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.boxShadow = 'var(--shadow-elevated)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'var(--shadow-card)';
        });
    });

    // Navbar background on scroll
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Add smooth hover effects to buttons
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Domain search functionality
function searchDomain() {
    const searchInput = document.getElementById('domain-search');
    const domain = searchInput.value.trim();
    
    if (!domain) {
        alert('Please enter a domain name to search.');
        return;
    }
    
    // Remove protocol and www if present
    const cleanDomain = domain.replace(/^https?:\/\//i, '').replace(/^www\./i, '');
    
    // Simple validation
    if (!/^[a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*$/.test(cleanDomain.split('.')[0])) {
        alert('Please enter a valid domain name.');
        return;
    }
    
    // Show loading state
    const searchBtn = event.target;
    const originalText = searchBtn.innerHTML;
    searchBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
    searchBtn.disabled = true;
    
    // Simulate domain search (replace with actual API call)
    setTimeout(() => {
        // Reset button
        searchBtn.innerHTML = originalText;
        searchBtn.disabled = false;
        
        // Show results (this would be replaced with actual results)
        showDomainResults(cleanDomain);
    }, 2000);
}

function showDomainResults(domain) {
    const extensions = ['.com', '.net', '.org', '.io', '.dev', '.tech'];
    const prices = ['$12.99', '$14.99', '$13.99', '$45.99', '$17.99', '$24.99'];
    const availability = [true, false, true, true, false, true];
    
    let resultsHTML = `
        <div class="mt-8 p-6 bg-card rounded-lg border border-border">
            <h3 class="text-xl font-semibold mb-4">Search Results for "${domain}"</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    `;
    
    extensions.forEach((ext, index) => {
        const isAvailable = availability[index];
        const price = prices[index];
        
        resultsHTML += `
            <div class="p-4 bg-secondary rounded-lg border ${isAvailable ? 'border-primary' : 'border-muted'} text-center">
                <div class="font-semibold text-lg">${domain}${ext}</div>
                <div class="text-sm ${isAvailable ? 'text-primary' : 'text-muted-foreground'} mb-2">
                    ${isAvailable ? 'Available' : 'Taken'}
                </div>
                ${isAvailable ? `
                    <div class="text-muted-foreground mb-3">${price}/year</div>
                    <button class="btn btn-primary btn-sm w-full">Add to Cart</button>
                ` : `
                    <div class="text-muted-foreground">Not available</div>
                `}
            </div>
        `;
    });
    
    resultsHTML += `
            </div>
            <div class="mt-6 text-center">
                <a href="domains.html" class="btn btn-outline">View More Extensions</a>
            </div>
        </div>
    `;
    
    // Insert results after domain search container
    const searchContainer = document.querySelector('.domain-search-container');
    const existingResults = document.querySelector('.domain-results');
    if (existingResults) {
        existingResults.remove();
    }
    
    const resultsDiv = document.createElement('div');
    resultsDiv.className = 'domain-results';
    resultsDiv.innerHTML = resultsHTML;
    searchContainer.parentNode.insertBefore(resultsDiv, searchContainer.nextSibling);
}

// Contact form handling
function submitContactForm(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    
    // Show loading state
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Show success message
        showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
        form.reset();
    }, 2000);
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg border max-w-md transform transition-all duration-300 translate-x-full`;
    
    if (type === 'success') {
        notification.classList.add('bg-green-500', 'text-white', 'border-green-600');
    } else if (type === 'error') {
        notification.classList.add('bg-red-500', 'text-white', 'border-red-600');
    } else {
        notification.classList.add('bg-primary', 'text-primary-foreground', 'border-primary');
    }
    
    notification.innerHTML = `
        <div class="flex items-center justify-between">
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-xl">&times;</button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
            }
        }, 300);
    }, 5000);
}

// Add loading states to all forms
document.addEventListener('submit', function(e) {
    if (e.target.tagName === 'FORM') {
        const submitBtn = e.target.querySelector('button[type="submit"]');
        if (submitBtn && !submitBtn.disabled) {
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            submitBtn.disabled = true;
            
            // Re-enable after 3 seconds if not handled elsewhere
            setTimeout(() => {
                if (submitBtn.disabled) {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            }, 3000);
        }
    }
});

// Pricing calculator (for hosting page)
function calculatePrice(plan, term) {
    const prices = {
        starter: { monthly: 4.99, annual: 3.99, biennial: 2.99 },
        professional: { monthly: 9.99, annual: 7.99, biennial: 5.99 },
        business: { monthly: 19.99, annual: 15.99, biennial: 11.99 }
    };
    
    return prices[plan] ? prices[plan][term] : 0;
}

// Domain transfer checker
function checkDomainTransfer() {
    const domainInput = document.getElementById('transfer-domain');
    const authCodeInput = document.getElementById('auth-code');
    
    if (!domainInput || !authCodeInput) return;
    
    const domain = domainInput.value.trim();
    const authCode = authCodeInput.value.trim();
    
    if (!domain) {
        showNotification('Please enter a domain name.', 'error');
        return;
    }
    
    if (!authCode) {
        showNotification('Please enter the authorization code.', 'error');
        return;
    }
    
    // Show loading
    const checkBtn = event.target;
    const originalText = checkBtn.innerHTML;
    checkBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking...';
    checkBtn.disabled = true;
    
    setTimeout(() => {
        checkBtn.innerHTML = originalText;
        checkBtn.disabled = false;
        
        // Simulate check result
        const eligible = Math.random() > 0.3; // 70% chance of being eligible
        
        if (eligible) {
            showNotification(`Great! ${domain} is eligible for transfer.`, 'success');
            // Show next steps
            showTransferNextSteps(domain);
        } else {
            showNotification(`Sorry, ${domain} is not eligible for transfer at this time.`, 'error');
        }
    }, 2000);
}

function showTransferNextSteps(domain) {
    const nextSteps = document.getElementById('transfer-next-steps');
    if (!nextSteps) return;
    
    nextSteps.innerHTML = `
        <div class="mt-8 p-6 bg-card rounded-lg border border-primary">
            <h3 class="text-xl font-semibold mb-4 text-primary">
                <i class="fas fa-check-circle mr-2"></i>
                Transfer Approved for ${domain}
            </h3>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-primary-foreground font-bold mr-3 mt-1">1</div>
                    <div>
                        <h4 class="font-semibold">Confirm Details</h4>
                        <p class="text-muted-foreground">Review your domain and contact information</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-muted rounded-full flex items-center justify-center text-muted-foreground font-bold mr-3 mt-1">2</div>
                    <div>
                        <h4 class="font-semibold">Complete Payment</h4>
                        <p class="text-muted-foreground">Secure payment processing - $9.99 transfer fee</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-muted rounded-full flex items-center justify-center text-muted-foreground font-bold mr-3 mt-1">3</div>
                    <div>
                        <h4 class="font-semibold">Transfer Complete</h4>
                        <p class="text-muted-foreground">Domain will be transferred within 5-7 days</p>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button class="btn btn-primary mr-4">Continue Transfer</button>
                <button class="btn btn-outline">Save for Later</button>
            </div>
        </div>
    `;
    nextSteps.classList.remove('hidden');
}