<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion - Special Discount Today</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ff8a00, #da1b60);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
            position: relative;
        }

        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .browser-controls {
            display: flex;
            gap: 8px;
        }

        .control-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ff5f57;
        }

        .control-dot:nth-child(2) {
            background: #ffbd2e;
        }

        .control-dot:nth-child(3) {
            background: #28ca42;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: bold;
            font-size: 18px;
        }

        .logo i {
            color: #ff8a00;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #ff8a00;
        }

        .nav-links a.active {
            color: #ff8a00;
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #ff8a00;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 3px;
        }

        .hamburger span {
            width: 20px;
            height: 2px;
            background: #333;
            transition: 0.3s;
        }

        
        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
            position: relative;
        }

        .content-left {
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .content-right {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            color: #333;
        }

        .hero-title .highlight {
            color: #ff8a00;
        }

        .hero-description {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 40px;
            max-width: 400px;
        }

        .action-section {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
            align-items: center;
        }

        .city-selector {
            position: relative;
        }

        .city-dropdown {
            padding: 12px 20px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            background: white;
            font-size: 14px;
            cursor: pointer;
            min-width: 150px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: border-color 0.3s ease;
        }

        .city-dropdown:hover {
            border-color: #ff8a00;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 100;
            margin-top: 5px;
        }

        .dropdown-menu.active {
            display: block;
            animation: fadeInUp 0.3s ease;
        }

        .dropdown-menu a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #333;
            transition: background 0.3s ease;
        }

        .dropdown-menu a:hover {
            background: #f8f9fa;
            color: #ff8a00;
        }

        .order-btn {
            background: linear-gradient(135deg, #ff8a00, #ff6b35);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .order-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 138, 0, 0.3);
        }

        .website-info {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #333;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #ff8a00;
            transform: translateY(-2px);
        }

        
        .model-image {
            width: 350px;
            height: 450px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 450"><rect width="350" height="450" fill="%23f0f0f0"/><path d="M175 50c30 0 55 25 55 55v80c0 30-25 55-55 55s-55-25-55-55v-80c0-30 25-55 55-55z" fill="%23d4a574"/><rect x="150" y="240" width="50" height="120" fill="%23b8860b" rx="25"/><rect x="130" y="360" width="90" height="60" fill="%23333" rx="20"/><rect x="120" y="420" width="110" height="30" fill="%238b4513" rx="15"/></svg>') center/cover;
            border-radius: 20px;
            position: relative;
            animation: float 6s ease-in-out infinite;
        }

        
        .decoration {
            position: absolute;
            opacity: 0.1;
        }

        .decoration-1 {
            top: 50px;
            right: 50px;
            font-size: 120px;
            color: #ff8a00;
            transform: rotate(15deg);
        }

        .decoration-2 {
            bottom: 50px;
            right: 30px;
            font-size: 60px;
            color: #333;
        }

        .decoration-3 {
            top: 100px;
            right: 150px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .decoration-3 .triangle {
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 12px solid #333;
            opacity: 0.3;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            opacity: 0.5;
            transition: opacity 0.3s ease;
        }

        .close-btn:hover {
            opacity: 1;
        }

        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .hamburger {
                display: flex;
            }

            .main-content {
                grid-template-columns: 1fr;
            }

            .content-right {
                order: -1;
                min-height: 300px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .model-image {
                width: 250px;
                height: 320px;
            }

            .action-section {
                flex-direction: column;
                align-items: stretch;
            }

            .city-dropdown {
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 15px 20px;
            }

            .content-left {
                padding: 40px 20px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .model-image {
                width: 200px;
                height: 280px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        
        <header class="header">
            <div class="browser-controls">
                <div class="control-dot"></div>
                <div class="control-dot"></div>
                <div class="control-dot"></div>
            </div>
            
            <nav class="nav-menu">
                <div class="logo">
                    <i class="fas fa-tshirt"></i>
                    FASHION
                </div>
                
                <ul class="nav-links" id="navLinks">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>

        
        <main class="main-content">
            <section class="content-left">
                <button class="close-btn" id="closeBtn">×</button>
                
                <h1 class="hero-title">
                    Special<br>
                    Discount <span class="highlight">Today</span>.
                </h1>
                
                <p class="hero-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                
                <div class="action-section">
                    <div class="city-selector">
                        <div class="city-dropdown" id="cityDropdown">
                            <span>Select Your City</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <a href="#" onclick="selectCity('New York')">New York</a>
                            <a href="#" onclick="selectCity('Los Angeles')">Los Angeles</a>
                            <a href="#" onclick="selectCity('Chicago')">Chicago</a>
                            <a href="#" onclick="selectCity('Miami')">Miami</a>
                            <a href="#" onclick="selectCity('London')">London</a>
                            <a href="#" onclick="selectCity('Paris')">Paris</a>
                        </div>
                    </div>
                    
                    <button class="order-btn" onclick="orderNow()">
                        Order Now
                    </button>
                </div>
                
                <div class="website-info">
                    www.fashion.com
                </div>
                
                <div class="social-links">
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </section>
            
            <section class="content-right">
                <div class="model-image"></div>
                
                
                <div class="decoration decoration-1">⚡</div>
                <div class="decoration decoration-2">✦</div>
                <div class="decoration decoration-3">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </section>
        </main>
    </div>

    <script>
        
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        
        const cityDropdown = document.getElementById('cityDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');

        cityDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('active');
            
            
            const chevron = cityDropdown.querySelector('.fa-chevron-down');
            chevron.style.transform = dropdownMenu.classList.contains('active') 
                ? 'rotate(180deg)' 
                : 'rotate(0deg)';
        });

        
        document.addEventListener('click', () => {
            dropdownMenu.classList.remove('active');
            const chevron = cityDropdown.querySelector('.fa-chevron-down');
            chevron.style.transform = 'rotate(0deg)';
        });

        
        function selectCity(city) {
            const dropdown = document.getElementById('cityDropdown');
            dropdown.querySelector('span').textContent = city;
            dropdownMenu.classList.remove('active');
            
            
            const chevron = cityDropdown.querySelector('.fa-chevron-down');
            chevron.style.transform = 'rotate(0deg)';
            
            
            showNotification(`Selected city: ${city}`);
        }

        
        function orderNow() {
            const selectedCity = document.getElementById('cityDropdown').querySelector('span').textContent;
            
            if (selectedCity === 'Select Your City') {
                showNotification('Please select a city first!', 'warning');
                return;
            }
            
            showNotification(`Order placed for ${selectedCity}! Redirecting to checkout...`, 'success');
            
            
            setTimeout(() => {
                console.log('Redirecting to checkout page...');
            }, 2000);
        }

        
        const navLinksElements = document.querySelectorAll('.nav-links a');
        navLinksElements.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                
                navLinksElements.forEach(l => l.classList.remove('active'));
                
                
                link.classList.add('active');
                
                
                navLinks.classList.remove('active');
            });
        });

        
        const closeBtn = document.getElementById('closeBtn');
        closeBtn.addEventListener('click', () => {
            document.querySelector('.container').style.transform = 'scale(0.95)';
            document.querySelector('.container').style.opacity = '0.5';
            
            setTimeout(() => {
                showNotification('Page minimized. Click anywhere to restore.', 'info');
                document.addEventListener('click', restorePage);
            }, 300);
        });

        function restorePage() {
            document.querySelector('.container').style.transform = 'scale(1)';
            document.querySelector('.container').style.opacity = '1';
            document.removeEventListener('click', restorePage);
        }

        
        function showNotification(message, type = 'info') {
            
            const existingNotification = document.querySelector('.notification');
            if (existingNotification) {
                existingNotification.remove();
            }

            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'success' ? '#4CAF50' : type === 'warning' ? '#FF9800' : '#2196F3'};
                color: white;
                padding: 15px 20px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                z-index: 1000;
                animation: slideInRight 0.3s ease;
                max-width: 300px;
                font-size: 14px;
            `;
            
            notification.textContent = message;
            document.body.appendChild(notification);

            
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOutRight {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);

        
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

        
        document.querySelectorAll('.social-links a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.1)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Fashion Landing Page Loaded Successfully!');
            
            
            document.querySelector('.container').style.opacity = '0';
            document.querySelector('.container').style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                document.querySelector('.container').style.transition = 'all 0.5s ease';
                document.querySelector('.container').style.opacity = '1';
                document.querySelector('.container').style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>