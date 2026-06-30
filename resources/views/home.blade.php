<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Empowering Education</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --secondary: #0ea5e9;
            --accent: #f43f5e;
            --bg-dark: #0f172a;
            --bg-card: rgba(30, 41, 59, 0.7);
            --text-main: #f8fafc;
            --text-muted: #cbd5e1;
            --glass-border: rgba(255, 255, 255, 0.1);
            --glass-bg: rgba(15, 23, 42, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body, html {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Abstract Background Elements */
        .bg-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.5;
            animation: float 20s infinite alternate ease-in-out;
        }

        .shape-1 {
            width: 600px;
            height: 600px;
            background: rgba(79, 70, 229, 0.4);
            top: -200px;
            left: -100px;
        }

        .shape-2 {
            width: 500px;
            height: 500px;
            background: rgba(14, 165, 233, 0.3);
            bottom: -100px;
            right: -100px;
            animation-delay: -5s;
        }

        .shape-3 {
            width: 400px;
            height: 400px;
            background: rgba(244, 63, 94, 0.2);
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: -10s;
        }

        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0, 0) scale(1); }
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 15px 5%;
            background: rgba(15, 23, 42, 0.9);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #fff, #a5b4fc);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 28px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
            z-index: -1;
        }

        .btn:hover::before {
            transform: translateX(100%);
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .btn:active {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: #fff;
            border: 2px solid var(--glass-border);
            backdrop-filter: blur(5px);
        }

        .btn-outline:hover {
            border-color: var(--secondary);
            background: rgba(14, 165, 233, 0.1);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 5% 60px;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            flex: 1;
            max-width: 650px;
        }

        .badge {
            display: inline-block;
            padding: 6px 16px;
            background: rgba(79, 70, 229, 0.15);
            border: 1px solid rgba(79, 70, 229, 0.3);
            border-radius: 30px;
            color: #a5b4fc;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 24px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: clamp(3rem, 5vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 24px;
            background: linear-gradient(to right, #fff, #cbd5e1, #94a3b8);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 40px;
            max-width: 500px;
        }

        .hero-actions {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .glass-panel {
            background: var(--bg-card);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            position: relative;
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
            transition: transform 0.5s ease;
        }

        .glass-panel:hover {
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg) translateY(-10px);
        }

        .hero-img-inner {
            border-radius: 16px;
            overflow: hidden;
            position: relative;
        }
        
        .hero-img-inner img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
            opacity: 0.9;
        }

        .hero-img-inner::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(45deg, rgba(79,70,229,0.2), transparent);
        }

        /* Stats Section */
        .stats {
            padding: 40px 5%;
            background: rgba(15, 23, 42, 0.4);
            border-top: 1px solid var(--glass-border);
            border-bottom: 1px solid var(--glass-border);
            position: relative;
            z-index: 1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 5px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-item p {
            color: var(--text-muted);
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Section Global */
        .section {
            padding: 100px 5%;
            position: relative;
            z-index: 1;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fff;
        }

        .section-subtitle {
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 40px 30px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at top right, rgba(14,165,233,0.1), transparent 50%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(14, 165, 233, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(79,70,229,0.2), rgba(14,165,233,0.2));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 24px;
            transition: transform 0.4s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            color: #fff;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #fff;
        }

        .feature-desc {
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image {
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--glass-border);
            position: relative;
        }
        
        .about-image img {
            width: 100%;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-content p {
            color: var(--text-muted);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .check-list {
            list-style: none;
            margin-top: 30px;
        }

        .check-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            color: var(--text-main);
            font-size: 1.1rem;
        }

        .check-list li i {
            color: var(--secondary);
            background: rgba(14, 165, 233, 0.1);
            padding: 8px;
            border-radius: 50%;
            font-size: 0.9rem;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(to bottom, transparent, rgba(15, 23, 42, 0.8));
        }

        .contact-container {
            max-width: 700px;
            margin: 0 auto;
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 50px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-control {
            width: 100%;
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 16px 20px;
            border-radius: 12px;
            color: #fff;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary);
            background: rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.1);
        }

        .form-control::placeholder {
            color: #64748b;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        
        .btn-submit {
            width: 100%;
            margin-top: 10px;
        }

        /* Footer */
        .footer {
            background: #0b1120;
            padding: 60px 5% 30px;
            border-top: 1px solid var(--glass-border);
            position: relative;
            z-index: 1;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 40px;
        }

        .footer-col h4 {
            color: #fff;
            font-size: 1.2rem;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .footer-col p {
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--secondary);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero { flex-direction: column; text-align: center; padding-top: 150px; }
            .hero-actions { justify-content: center; }
            .about-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .navbar { padding: 20px; }
            .nav-links { display: none; /* In a real app, add a hamburger menu */ }
            .hero-title { font-size: 2.5rem; }
            .footer-grid { grid-template-columns: 1fr; }
            .contact-container { padding: 30px 20px; }
        }
    </style>
</head>
<body>

    <!-- Background Shapes for Glassmorphism -->
    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <a href="#home" class="logo">
            <i class="fas fa-graduation-cap" style="color: var(--secondary);"></i> 
            UniManage
        </a>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#contact">Contact</a>
        </div>
        <div style="display: flex; gap: 10px;">
             <!-- Optional: Login link in header for quick access -->
            <a href="{{ route('student.login.form') }}" class="btn btn-outline" style="padding: 8px 20px; font-size: 0.9rem;">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="badge">Next Generation</div>
            <h1 class="hero-title">Elevate Your Campus <span>Experience</span></h1>
            <p class="hero-subtitle">The ultimate university management platform bridging the gap between administration, faculty, and students with intelligent automation.</p>
            
            <div class="hero-actions">
                <a href="{{ route('admin.login.form') }}" class="btn btn-primary">
                    <i class="fas fa-shield-halved"></i> Admin Portal
                </a>
                <a href="{{ route('student.login.form') }}" class="btn btn-outline">
                    <i class="fas fa-user-graduate"></i> Student Portal
                </a>
            </div>
        </div>
        <div class="hero-image" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
            <div class="glass-panel">
                <div class="hero-img-inner">
                    <!-- Assuming you have this image, or it will gracefully fallback -->
                    <img src="{{ asset('images/home (2).jpg') }}" alt="Dashboard Preview" onerror="this.src='https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80'">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
                <h3 class="counter" data-target="5000">0</h3>
                <p>Active Students</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <h3 class="counter" data-target="150">0</h3>
                <p>Faculty Members</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="counter" data-target="85">0</h3>
                <p>Degree Programs</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="counter" data-target="100">0</h3>
                <p>Placement Rate (%)</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="about-grid">
            <div class="about-image glass-panel" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80" alt="University Campus">
            </div>
            <div class="about-content" data-aos="fade-left">
                <div class="badge">About Us</div>
                <h2>Transforming Education Through Technology</h2>
                <p>We are dedicated to providing innovative solutions for educational institutions. Our centralized system is designed to streamline administrative tasks, enhance communication, and enrich the academic journey.</p>
                <p>By leveraging cutting-edge cloud infrastructure, we empower administrators and students with robust tools that make learning and management more efficient and highly effective.</p>
                
                <ul class="check-list">
                    <li><i class="fas fa-check"></i> 100% Secure & GDPR Compliant Data Management</li>
                    <li><i class="fas fa-check"></i> Real-time Analytics and Performance Tracking</li>
                    <li><i class="fas fa-check"></i> Seamless Integration with Existing Infrastructures</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" id="features">
        <div class="section-header" data-aos="fade-up">
            <div class="badge">Capabilities</div>
            <h2 class="section-title">Everything You Need</h2>
            <p class="section-subtitle">A comprehensive suite of tools built specifically for modern universities.</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-icon"><i class="fas fa-users-viewfinder"></i></div>
                <h3 class="feature-title">Student Lifecycle</h3>
                <p class="feature-desc">From admissions to alumni relations, manage the entire student journey securely in one unified database.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3 class="feature-title">Fee Management</h3>
                <p class="feature-desc">Automated invoicing, payment gateways, and real-time financial reporting for transparent administration.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon"><i class="fas fa-book-open-reader"></i></div>
                <h3 class="feature-title">Academic Portal</h3>
                <p class="feature-desc">Interactive dashboards for course registration, assignment submissions, and instant grade accessibility.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                <h3 class="feature-title">Attendance Tracking</h3>
                <p class="feature-desc">Biometric and manual attendance logs with automated alerts for low attendance thresholds.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3 class="feature-title">Insightful Reports</h3>
                <p class="feature-desc">Generate complex reports instantly. Make data-driven decisions to improve institutional performance.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-icon"><i class="fas fa-shield-virus"></i></div>
                <h3 class="feature-title">Role-Based Access</h3>
                <p class="feature-desc">Strict security protocols ensuring users only access information pertinent to their specific roles.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section" id="contact">
        <div class="section-header" data-aos="fade-up">
            <div class="badge">Get in Touch</div>
            <h2 class="section-title">We're Here to Help</h2>
            <p class="section-subtitle">Have questions about implementation or pricing? Send us a message.</p>
        </div>
        
        <div class="contact-container" data-aos="zoom-in" data-aos-duration="800">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Work Email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="button" class="btn btn-primary btn-submit">
                    Send Message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="#home" class="logo" style="margin-bottom: 20px;">
                    <i class="fas fa-graduation-cap" style="color: var(--secondary);"></i> 
                    UniManage
                </a>
                <p>Empowering educational institutions with next-generation management software designed for scale and security.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Portals</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('admin.login.form') }}">Admin Dashboard</a></li>
                    <li><a href="{{ route('student.login.form') }}">Student Portal</a></li>
                    <li><a href="#">Faculty Login</a></li>
                    <li><a href="#">Alumni Network</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Legal</h4>
                <ul class="footer-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2026 UniManage Systems. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animations
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
            easing: 'ease-out-cubic',
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Number Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target + (target > 100 ? '+' : '');
                    }
                };
                updateCount();
            });
        };

        // Intersection Observer to trigger counter animation when in view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
</body>
</html>
