<?php
// riadscircle Communication Website - Single File Structure
// This file contains all HTML, CSS (via Tailwind), and client-side JavaScript.
// It uses a minimal PHP tag structure to comply with the requested file format.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riadscircle Communication</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-bg {
            /* Placeholder background image for a professional connectivity theme */
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://placehold.co/1920x800/003366/ffffff?text=Next-Gen+Fiber+Network');
            background-size: cover;
            background-position: center;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: #3b82f6; /* Blue-500 */
            margin: 10px auto 0;
            border-radius: 9999px;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header & Navigation -->
    <header class="bg-blue-700 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-white tracking-wider">
                riadscircle <span class="text-blue-200">Communication</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-white hover:text-blue-200 transition duration-300">Home</a>
                <a href="#services" class="text-white hover:text-blue-200 transition duration-300">Services</a>
                <a href="#about" class="text-white hover:text-blue-200 transition duration-300">About Us</a>
                <a href="#contact" class="text-white hover:text-blue-200 transition duration-300">Contact</a>
            </nav>
            <!-- Mobile Menu Button (Hamburger) -->
            <button id="menu-btn" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-800">
            <a href="#home" class="block py-3 px-4 text-white hover:bg-blue-700 transition duration-300 border-t border-blue-900">Home</a>
            <a href="#services" class="block py-3 px-4 text-white hover:bg-blue-700 transition duration-300 border-t border-blue-900">Services</a>
            <a href="#about" class="block py-3 px-4 text-white hover:bg-blue-700 transition duration-300 border-t border-blue-900">About Us</a>
            <a href="#contact" class="block py-3 px-4 text-white hover:bg-blue-700 transition duration-300 border-t border-blue-900">Contact</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-bg h-screen flex items-center justify-center text-center">
        <div class="p-8 max-w-4xl mx-auto rounded-xl">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 leading-tight">
                Connect <span class="text-blue-400">Faster</span>, Achieve More.
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 font-light">
                Delivering reliable, high-speed fiber optic connectivity and corporate network solutions across the region.
            </p>
            <a href="#services" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                Explore Our Solutions
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold section-title mb-12">Our Core Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service Card 1: Fiber Optics -->
                <div class="p-8 bg-white shadow-xl rounded-xl border border-blue-100 hover:shadow-2xl transition duration-300">
                    <div class="text-blue-600 mb-4 inline-block">
                        <!-- Fiber Optic Icon (Inline SVG for compliance) -->
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10h6"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14h6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Dedicated Fiber Connectivity</h3>
                    <p class="text-gray-600">Ultra-fast, stable fiber internet for homes and businesses, ensuring reliable performance 24/7.</p>
                </div>

                <!-- Service Card 2: Corporate Solutions -->
                <div class="p-8 bg-white shadow-xl rounded-xl border border-blue-100 hover:shadow-2xl transition duration-300">
                    <div class="text-blue-600 mb-4 inline-block">
                        <!-- Corporate Icon (Inline SVG) -->
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.565 23.565 0 0112 15c-3.185 0-6.223-.576-9-1.745M16 4v12m-2-1h6m-3-6h6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Enterprise Network Solutions</h3>
                    <p class="text-gray-600">Customized networking, VPN, and managed services to streamline corporate operations and security.</p>
                </div>

                <!-- Service Card 3: Cloud & Data -->
                <div class="p-8 bg-white shadow-xl rounded-xl border border-blue-100 hover:shadow-2xl transition duration-300">
                    <div class="text-blue-600 mb-4 inline-block">
                        <!-- Data Center Icon (Inline SVG) -->
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path></svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Data Center & Hosting</h3>
                    <p class="text-gray-600">Secure, scalable, and resilient data center services for co-location and critical application hosting.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:space-x-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-4xl font-bold mb-4 text-blue-800">About riadscircle Communication</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Established with a vision for unparalleled digital connectivity, riadscircle Communication has grown to be a trusted name in the industry. We specialize in providing state-of-the-art fiber optic infrastructure and end-to-end communication solutions that power modern life and enterprise growth.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Our commitment is to deliver high reliability, exceptional speed, and dedicated customer support, ensuring our clients stay ahead in the digital era.
                    </p>
                    <a href="#contact" class="text-blue-600 font-semibold hover:text-blue-800 transition duration-300 flex items-center">
                        Meet Our Team
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Our+Vision" alt="Team working in an office" class="w-full h-auto object-cover rounded-xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action / Contact Form Section -->
    <section id="contact" class="py-16 bg-blue-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Upgrade Your Connection?</h2>
            <p class="text-xl mb-8">
                Contact our expert team today to find the perfect plan for your business or home.
            </p>
            <form id="contact-form" class="bg-white p-6 md:p-8 rounded-xl shadow-2xl text-left space-y-4">
                <input type="text" placeholder="Your Name" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                <input type="email" placeholder="Your Email" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                <textarea placeholder="Your Message or Query" rows="4" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800"></textarea>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-lg transition duration-300 transform hover:scale-[1.01]">
                    Send Message
                </button>
                <div id="form-message" class="text-center mt-4 hidden text-blue-600 font-semibold"></div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <h4 class="text-xl font-bold mb-4 text-blue-400">riadscircle</h4>
                <p class="text-gray-400 text-sm">Innovating connectivity for a digital tomorrow.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition">Company Profile</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                <ul class="space-y-2 text-sm">
                    <li class="text-gray-400">Email: info@riadscircle.com</li>
                    <li class="text-gray-400">Phone: +880 1XXXXXXXXX</li>
                    <li class="text-gray-400">Address: 123 Network Avenue, Dhaka, BD</li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                <div class="flex space-x-3">
                    <!-- Placeholder Social Icons (Inline SVGs) -->
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 13.5l-.224 2.24L12 16.5l.224-2.24H14zM12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.873v-6.985h-2.54v-2.897h2.54V9.79c0-2.508 1.493-3.89 3.776-3.89 1.094 0 2.24.195 2.24.195v2.45h-1.26c-1.248 0-1.642.776-1.642 1.574V13.5h2.774l-.444 2.897h-2.33V22C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 4.01c-.88.39-1.83.66-2.82.78a4.92 4.92 0 002.16-2.71c-.97.57-2.05.99-3.19 1.22A4.92 4.92 0 0012.35 6c-3.11 0-5.63 2.52-5.63 5.63 0 .44.05.87.14 1.28A15.77 15.77 0 013 5.86a4.93 4.93 0 001.52 6.58A4.91 4.91 0 013.8 12.8v.06c0 6.13 4.37 11.23 10.15 12.4A4.93 4.93 0 018 24c-.95 0-1.87-.09-2.76-.28a15.77 15.77 0 008.1 2.37c9.74 0 15.08-8.08 15.08-15.08 0-.23-.01-.45-.02-.68A10.74 10.74 0 0022 4.01z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-800 text-center">
            <p class="text-sm text-gray-500">&copy; 2025 riadscircle Communication. All rights reserved. | Powered by Connectivity.</p>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu and Form Submission -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const contactForm = document.getElementById('contact-form');
            const formMessage = document.getElementById('form-message');

            // 1. Mobile Menu Toggle
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when a link is clicked
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            // 2. Simple Form Handler (Prevents default submission and shows success message)
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Simulate form submission success
                formMessage.textContent = 'Thank you for your message! We will be in touch shortly.';
                formMessage.classList.remove('hidden');
                formMessage.classList.add('text-green-500'); // Use green for success
                contactForm.reset();

                // Hide the message after 5 seconds
                setTimeout(() => {
                    formMessage.classList.add('hidden');
                }, 5000);
            });
        });
    </script>

</body>
</html>


