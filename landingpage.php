<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Learning System - Welcome</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        }
        
        .header {
            background:rgb(36, 8, 199);
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .nav-links a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        
        .hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            background: url('image/image.png') center/cover;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: rgb(36, 8, 199);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            background: rgb(36, 8, 199);
        }
        
        .features {
            padding: 4rem 2rem;
            background: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: #333;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .feature-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .feature-card {
            flex: 1 1 300px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 3rem;
            color:rgb(36, 8, 199);
            margin-bottom: 1.5rem;
        }
        
        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .cta {
            padding: 5rem 2rem;
            text-align: center;
            background: linear-gradient(135deg,rgb(36, 8, 199) 0%,rgb(255, 255, 255) 100%);
            color: white;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .cta p {
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta .btn {
            background: white;
            color: rgb(36, 8, 199);
        }
        
        .cta .btn:hover {
            background: #f5f5f5;
        }
        
        .footer {
            background: #333;
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .footer a {
            color:rgb(36, 8, 199);
            text-decoration: none;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 2rem 0;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s, background 0.3s;
        }
        
        .social-links a:hover {
            transform: translateY(-5px);
            background:rgb(36, 8, 199);
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .feature-grid {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">Online Learning System</div>
        <nav class="nav-links">
            <a href="landingpage.php">Home</a>
            <a href="index.php">Login</a>
            <!-- <a href="sign.php">Register</a> -->
            <a href="feedback.php">Feedback</a>
        </nav>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to the Online Learning System</h1>
            <p>Expand your knowledge, test your skills, and track your progress with our comprehensive quiz-based learning platform.</p>
            <a href="sign.php" class="btn">Get Started</a>
        </div>
    </section>
    
    <section class="features">
        <div class="section-title">
            <h2>Features</h2>
            <p>Discover the tools and resources available to enhance your learning experience</p>
        </div>
        
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="feature-title">Interactive Quizzes</h3>
                <p>Test your knowledge with our extensive library of quizzes across various subjects and topics.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Progress Tracking</h3>
                <p>Monitor your performance and see your improvement over time with detailed statistics.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="feature-title">Competitive Rankings</h3>
                <p>Compare your scores with other learners and climb the leaderboard as you progress.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3 class="feature-title">Teacher Dashboard</h3>
                <p>Educators can create, manage, and monitor quizzes and student performance with ease.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="feature-title">Mobile-Friendly</h3>
                <p>Access your courses and quizzes from any device, anytime, anywhere.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="feature-title">Feedback System</h3>
                <p>Share your thoughts and suggestions to help us improve your learning experience.</p>
            </div>
        </div>
    </section>
    
    <section class="cta">
        <h2>Ready to Start Learning?</h2>
        <p>Join thousands of students who are already enhancing their education through our platform. Create your account today to access all features.</p>
        <a href="register.php" class="btn">Register Now</a>
    </section>
    
    <footer class="footer">
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p>&copy; 2025 Online Learning System. All rights reserved.</p>
        <p>Contact us at <a href="mailto:info@onlinelearningsystem.com">info@onlinelearningsystem.com</a></p>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        $(document).ready(function() {
            $('a[href*="#"]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });
    </script>
</body>
</html>