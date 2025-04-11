<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Court - Taste the World!</title>
    <meta name="description" content="A modern food court offering a diverse culinary experience.">
    <meta name="keywords" content="food court, restaurants, dining, cuisine, food">
    <meta name="author" content="Your Name">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <style>
        /* CSS Reset */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Variables */
        :root {
            --primary-color: #FF5733;
            --secondary-color: #3498db;
            --accent-color: #f39c12;
            --text-color: #333;
            --background-color: #f9f9f9;
            --white-color: #fff;
            --shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            --font-family-primary: 'Poppins', sans-serif;
            --font-family-secondary: 'Roboto', sans-serif;
        }

        body {
            font-family: var(--font-family-secondary);
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: var(--secondary-color);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Layout */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Navigation */
        .navbar {
            background-color: var(--white-color);
            padding: 15px 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            font-family: var(--font-family-primary);
        }

        .navbar-menu {
            list-style: none;
            display: flex;
        }

        .navbar-menu li {
            margin-left: 20px;
        }

        .navbar-menu a {
            color: var(--text-color);
            transition: color 0.3s ease;
        }

        .navbar-menu a:hover {
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            color: var(--white-color);
            text-align: center;
            padding: 150px 0;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            font-family: var(--font-family-primary);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: var(--white-color);
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: 500;
        }

        .btn:hover {
            background-color: var(--accent-color);
        }

        /* About Section */
        #about {
            padding: 80px 0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-family: var(--font-family-primary);
            color: var(--primary-color);
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .about-image img {
            border-radius: 5px;
            box-shadow: var(--shadow);
        }

        /* Services Section */
        #services {
            padding: 80px 0;
            background-color: #f0f0f0;
        }

        #services h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            font-family: var(--font-family-primary);
            color: var(--primary-color);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: var(--white-color);
            padding: 30px;
            border-radius: 5px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .service-card:hover i {
            color: var(--accent-color);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-family: var(--font-family-primary);
        }

        /* Contact Section */
        #contact {
            padding: 80px 0;
        }

        #contact h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            font-family: var(--font-family-primary);
            color: var(--primary-color);
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            font-family: var(--font-family-secondary);
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-submit {
            background-color: var(--secondary-color);
            color: var(--white-color);
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1rem;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: var(--white-color);
            text-align: center;
            padding: 20px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .navbar-menu {
                display: none;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-text {
                order: 2;
            }

            .about-image {
                order: 1;
            }

            .hero {
                padding: 100px 0;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

        }

        /* Animate On Scroll (AOS) Styles */
        [data-aos="fade-up"] {
            transform: translateY(50px);
            opacity: 0;
            transition-property: transform, opacity;
            transition-duration: 0.8s;
        }

        [data-aos="fade-up"].aos-animate {
            transform: translateY(0);
            opacity: 1;
        }

        /* Add more AOS styles as needed */
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">Food Court</a>
            <ul class="navbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to the Ultimate Food Experience!</h1>
            <p class="hero-subtitle">Discover a world of flavors in one place. Enjoy diverse cuisines and a vibrant
                atmosphere.</p>
            <a href="#services" class="btn">Explore Our Restaurants</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container about-content">
            <div class="about-text" data-aos="fade-right">
                <h2>About Our Food Court</h2>
                <p>Our food court is a culinary destination, offering a wide range of food options to satisfy every
                    craving. We are committed to providing a clean, comfortable, and exciting dining experience for
                    our guests.</p>
                <p>From fast food favorites to gourmet cuisine, we have something for everyone. Our vendors are
                    carefully selected to ensure quality and diversity.</p>
            </div>
            <div class="about-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1600891722252-60d0e54b4414?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    alt="Food Court Interior">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Our Restaurants</h2>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <i class="fas fa-pizza-slice"></i>
                    <h3>Italian Delights</h3>
                    <p>Enjoy authentic Italian pizza, pasta, and more from our renowned Italian restaurant.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-hamburger"></i>
                    <h3>American Classics</h3>
                    <p>Get your burger fix with classic American burgers, fries, and milkshakes.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-sushi"></i>
                    <h3>Japanese Cuisine</h3>
                    <p>Experience the art of Japanese cuisine with fresh sushi, ramen, and bento boxes.</p>
                </div>
                <div class="service-card" data-aos="fade-up">
                    <i class="fas fa-taco"></i>
                    <h3>Mexican Fiesta</h3>
                    <p>Spice up your day with delicious tacos, burritos, and enchiladas from our Mexican restaurant.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-bowl-food"></i>
                    <h3>Healthy Bowls</h3>
                    <p>Fresh and healthy bowls with lots of vegetables and proteins. Lots of different flavours!</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-ice-cream"></i>
                    <h3>Ice cream and sweets</h3>
                    <p>Delicious ice cream, sweets, milkshakes, pastries and cakes!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Food Court. All rights reserved.</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // AOS Initialization
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

</body>

</html>
```

<?php include "includes/footer.php"; ?>