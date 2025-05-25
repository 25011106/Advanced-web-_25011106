<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design for Developers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        
        .header {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="50" r="20" fill="%23ffffff" opacity="0.05"/></svg>');
            opacity: 0.1;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            background: #3498db;
            padding: 8px 12px;
            border-radius: 4px;
        }

        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .nav-toggle span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            transition: 0.3s;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 300;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .cta-button {
            background: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }

        .hero-image {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .mockup {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        
        .learn-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-content {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 40px;
            align-items: center;
        }

        .design-book {
            background: #2c3e50;
            padding: 40px 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .design-book::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 2px,
                rgba(255,255,255,0.1) 2px,
                rgba(255,255,255,0.1) 4px
            );
        }

        .design-book h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .design-book p {
            font-size: 0.9rem;
            opacity: 0.8;
            position: relative;
            z-index: 2;
        }

        .learn-content h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .learn-content p {
            margin-bottom: 15px;
            color: #666;
            line-height: 1.8;
        }

        
        .testimonials {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 80px 0;
            color: white;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            font-weight: 300;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .testimonial-card p {
            font-style: italic;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: bold;
            font-size: 0.9rem;
        }

        
        .footer {
            background: #2c3e50;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            color: #3498db;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #3498db;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #34495e;
            color: white;
            font-size: 1rem;
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: #bdc3c7;
        }

        .contact-form button {
            background: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: #2980b9;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
            font-size: 0.9rem;
        }

        
        @media (max-width: 768px) {
            .nav-toggle {
                display: flex;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .section-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }

        
        .mobile-preview {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 200px;
            height: 400px;
            background: #2c3e50;
            border-radius: 15px;
            padding: 10px;
            display: none;
            z-index: 1000;
        }

        .mobile-content {
            background: white;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            font-size: 0.6rem;
        }

        @media (min-width: 1200px) {
            .mobile-preview {
                display: block;
            }
        }
    </style>
</head>
<body>
    
    <div class="mobile-preview">
        <div class="mobile-content">
            <div style="background: #3498db; color: white; padding: 8px; text-align: center;">
                <strong>E</strong> Design for Developers
            </div>
            <div style="padding: 10px; font-size: 8px;">
                <h4>Enhance UI</h4>
                <div style="background: #f0f0f0; height: 30px; margin: 5px 0; border-radius: 3px;"></div>
                <h4>Learn Design</h4>
                <p style="margin: 5px 0;">Like just like any other Coding Tutorial</p>
                <div style="background: #2c3e50; height: 40px; margin: 5px 0; border-radius: 3px;"></div>
                <h4>Testimonials</h4>
                <div style="background: #667eea; height: 60px; margin: 5px 0; border-radius: 3px;"></div>
                <h4>Contact Us</h4>
                <div style="background: #2c3e50; height: 40px; margin: 5px 0; border-radius: 3px;"></div>
            </div>
        </div>
    </div>

    
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">E</div>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Design for Developers</h1>
                    <p>Learn how to enhance your website</p>
                    <a href="#enhance" class="cta-button">Enhance UI</a>
                </div>
                <div class="hero-image">
                    <div class="mockup">UI Mockup Preview</div>
                </div>
            </div>
        </div>
    </header>

    
    <section class="learn-section" id="learn">
        <div class="container">
            <div class="section-content">
                <div class="design-book">
                    <h3>GOOD DESIGN</h3>
                    <p>Professional Design Principles</p>
                </div>
                <div class="learn-content">
                    <h2>Learn Design</h2>
                    <p>Like just like any other Coding Tutorial, here you can learn the basic about design. Design is very important in web development.</p>
                    <p>Advanced programers know how important visual web interface can be for better user experience which help in making your client more satisfied.</p>
                    <p>Here you learn to design, go over overview of rules and understand the basic principle of design and color combination.</p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <p style="text-align: center; margin-bottom: 40px;">What others say about us</p>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>"Great tutorials and practical examples that helped me improve my design skills significantly. The step-by-step approach is perfect for developers."</p>
                    <div class="testimonial-author">- Sarah Johnson, Frontend Developer</div>
                </div>
                <div class="testimonial-card">
                    <p>"Finally, design explanations that make sense to a programmer's mind. The examples are practical and immediately applicable to real projects."</p>
                    <div class="testimonial-author">- Mike Chen, Full Stack Developer</div>
                </div>
                <div class="testimonial-card">
                    <p>"This resource bridged the gap between my coding skills and design knowledge. Now I can create beautiful interfaces without relying on designers."</p>
                    <div class="testimonial-author">- Jessica Davis, Web Developer</div>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p style="margin-bottom: 20px;">Send us a message</p>
                    <form class="contact-form">
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="Email" required>
                        <textarea placeholder="Your Message" rows="4" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="footer-section">
                    <h3>Sitemap</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#tutorials">Tutorials</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <div class="logo" style="margin-bottom: 20px;">E</div>
                    <p>📞 (001) 840 2000</p>
                    <p>✉️ email@website.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright 2024 All Rights Reserved Company Name.</p>
            </div>
        </div>
    </footer>

    <script>
        
        document.querySelector('.nav-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
        });

        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>