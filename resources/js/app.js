import './bootstrap';

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Make GSAP available globally
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

window.Alpine = Alpine;

Alpine.start();

// Support page functionality
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle for all pages
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.toggle('hidden');
            }
        });
    }
    
    // Support page specific functionality
    if (window.location.pathname === '/support') {
        console.log('Support page loaded successfully!');
        
        // Services Slider Functionality
        const servicesTrack = document.getElementById('servicesTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        if (servicesTrack && prevBtn && nextBtn) {
            let currentPosition = 0;
            const cardWidth = 320; // w-80 = 320px
            const maxPosition = servicesTrack.children.length * cardWidth - window.innerWidth + 100;
            
            function updateSliderPosition() {
                servicesTrack.style.transform = `translateX(-${currentPosition}px)`;
            }
            
            function slideNext() {
                if (currentPosition < maxPosition) {
                    currentPosition += cardWidth;
                    if (currentPosition > maxPosition) {
                        currentPosition = maxPosition;
                    }
                    updateSliderPosition();
                }
            }
            
            function slidePrev() {
                if (currentPosition > 0) {
                    currentPosition -= cardWidth;
                    if (currentPosition < 0) {
                        currentPosition = 0;
                    }
                    updateSliderPosition();
                }
            }
            
            // Event listeners
            nextBtn.addEventListener('click', slideNext);
            prevBtn.addEventListener('click', slidePrev);
            
            // Auto-play slider
            let autoPlayInterval = setInterval(slideNext, 5000);
            
            // Pause auto-play on hover
            servicesTrack.addEventListener('mouseenter', () => {
                clearInterval(autoPlayInterval);
            });
            
            servicesTrack.addEventListener('mouseleave', () => {
                autoPlayInterval = setInterval(slideNext, 5000);
            });
            
            // Touch/swipe support for mobile
            let startX = 0;
            let endX = 0;
            
            servicesTrack.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            });
            
            servicesTrack.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                const diff = startX - endX;
                
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        slideNext();
                    } else {
                        slidePrev();
                    }
                }
            });
            
            console.log('Services slider initialized successfully!');
        }
    }
    
    // Simple scroll animations for all pages
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                if (!target.classList.contains('animated')) {
                    target.classList.add('animated');
                    target.style.opacity = '0';
                    target.style.transform = 'translateY(30px)';
                    target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    
                    setTimeout(() => {
                        target.style.opacity = '1';
                        target.style.transform = 'translateY(0)';
                    }, 100);
                }
            }
        });
    }, observerOptions);
    
    // Observe sections for scroll animations
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        observer.observe(section);
    });
});
