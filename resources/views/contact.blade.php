@extends('layouts.master')

@section('title', 'Contact Us - Business Control Systems')

@section('styles')
@vite(['resources/css/contact.css'])
@endsection

@section('content')

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container-custom">
        <div class="text-center max-w-4xl mx-auto contact-hero-content">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6 fade-in">
                <span class="gradient-text">Contact Us</span>
            </h1>
            <p class="text-xl text-gray-100 mb-8 slide-up stagger-1">
                Get in touch with our team of experts. We're here to help you find the perfect POS solution for your business.
            </p>
            <div class="inline-flex items-center space-x-2 bg-white/20 rounded-full px-6 py-3 slide-up stagger-2">
                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                <span class="text-white font-medium">24/7 Support Available</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                Get in <span class="gradient-text">Touch</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto slide-up stagger-1">
                Multiple ways to reach our team of POS experts
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Phone -->
            <div class="contact-info-card scale-in stagger-1">
                <div class="contact-info-icon bg-gradient-to-br from-blue-500 to-purple-600">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="contact-info-title">Phone</h3>
                <p class="contact-info-text">(800) 233-5876</p>
                <p class="contact-info-text">Mon-Fri: 9AM-6PM EST</p>
            </div>
            
            <!-- Email -->
            <div class="contact-info-card scale-in stagger-2">
                <div class="contact-info-icon bg-gradient-to-br from-green-500 to-blue-600">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="contact-info-title">Email</h3>
                <p class="contact-info-text">info@businesscontrol.com</p>
                <p class="contact-info-text">We respond within 24 hours</p>
            </div>
            
            <!-- Address -->
            <div class="contact-info-card scale-in stagger-3">
                <div class="contact-info-icon bg-gradient-to-br from-purple-500 to-pink-600">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="contact-info-title">Address</h3>
                <p class="contact-info-text">123 Business Street<br>Suite 100<br>New York, NY 10001</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 fade-in">
                    Send us a <span class="gradient-text">Message</span>
                </h2>
                <p class="text-xl text-gray-600 slide-up stagger-1">
                    Fill out the form below and we'll get back to you as soon as possible
                </p>
            </div>
            
            <div class="contact-form p-8 scale-in stagger-2">
                <form id="contactForm" method="POST" action="/contact">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input">
                        </div>
                    </div>
                    
                    <div class="form-group mt-6">
                        <label for="message" class="form-label">Message *</label>
                        <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Tell us about your business needs and how we can help..." required></textarea>
                    </div>
                    
                    <div class="text-center mt-8">
                        <button type="submit" id="submitBtn" class="submit-btn">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container-custom text-center">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-8 fade-in">
            Ready to Transform Your <span class="text-yellow-300">Business</span>?
        </h2>
        <p class="text-xl text-gray-100 mb-12 max-w-3xl mx-auto slide-up stagger-1">
            Join thousands of businesses that trust Business Control Systems for their POS solutions. 
            Get started today with a free consultation.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <div class="cta-card p-6 text-center scale-in stagger-2">
                <div class="text-2xl font-bold text-gray-900 mb-2">(800) 233-5876</div>
                <div class="text-gray-600">Call for immediate assistance</div>
            </div>
            <a href="/retail-pos" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 scale-in stagger-3">
                View Our Solutions
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
@vite(['resources/js/contact.js'])
@endsection
