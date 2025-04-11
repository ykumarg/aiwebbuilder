<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Product Website</title>
    <meta name="description" content="Web Developer offering puzzle products and a puzzle game app.">
    <meta name="keywords" content="web developer, puzzle, game app, online store">
    <meta name="author" content="Your Name">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --accent-color: #ffc107;
            --gradient: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            --shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            --font-primary: 'Montserrat', sans-serif;
            --font-secondary: 'Roboto', sans-serif;
        }

        /* General Styles */
        body {
            font-family: var(--font-secondary);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--accent-color);
        }

        h1,
        h2,
        h3 {
            font-family: var(--font-primary);
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 2rem 0;
        }

        /* Navigation */
        .navbar {
            background-color: var(--light-color);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
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
            font-family: var(--font-primary);
        }

        .navbar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .navbar-menu li {
            margin-left: 1.5rem;
        }

        .navbar-menu li a {
            color: var(--dark-color);
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-menu li a:hover {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        /* Hero Section */
        #hero {
            background: url('https://images.unsplash.com/photo-1587828048879-55896f656397?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80') center/cover no-repeat;
            color: var(--light-color);
            text-align: center;
            padding: 8rem 0;
            position: relative;
            overflow: hidden;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        #hero .container {
            position: relative;
            z-index: 2;
        }

        #hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: var(--accent-color);
            color: var(--dark-color);
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        /* Sections */
        section {
            padding: 4rem 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
        }

        /* About Section */
        #about .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        #about img {
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        /* Services Section */
        #services .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background-color: var(--light-color);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Contact Section */
        #contact .container {
            max-width: 700px;
            margin: 0 auto;
        }

        #contact form {
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 1rem;
            font-weight: bold;
        }

        #contact input,
        #contact textarea {
            padding: 0.8rem;
            margin-top: 0.5rem;
            border: 1px solid var(--secondary-color);
            border-radius: 5px;
            font-size: 1rem;
        }

        #contact button {
            margin-top: 2rem;
            padding: 1rem 2rem;
            background-color: var(--primary-color);
            color: var(--light-color);
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: var(--accent-color);
            color: var(--dark-color);
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            text-align: center;
            padding: 1rem 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .navbar .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-menu {
                margin-top: 1rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-menu li {
                margin-left: 0;
                margin-bottom: 0.5rem;
            }

            #hero {
                padding: 4rem 0;
            }

            #hero h1 {
                font-size: 2.5rem;
            }

            #about .container {
                grid-template-columns: 1fr;
            }

            #about img {
                order: -1;
            }

            #services .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">Puzzle Product</a>
            <ul class="navbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Products</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <h1>Discover the Joy of Puzzles</h1>
            <p>High-quality puzzle products and a fun puzzle game app for endless entertainment.</p>
            <a href="#services" class="btn">Explore Products</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1515599941911-9814210ef30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="About Us">
            <div>
                <h2>About Our Company</h2>
                <p>We are passionate web developers creating innovative puzzle products and a captivating puzzle game
                    app. Our mission is to provide engaging and high-quality entertainment for puzzle enthusiasts of all
                    ages.</p>
                <p>With a commitment to excellence and a focus on user experience, we strive to deliver products that
                    bring joy and challenge to our customers.</p>
            </div>
        </div>
    </section>

    <section id="services">
        <h2>Our Products</h2>
        <div class="container">
            <div class="service-card">
                <i class="fas fa-puzzle-piece"></i>
                <h3>Classic Jigsaw Puzzles</h3>
                <p>Explore our collection of beautifully designed jigsaw puzzles with varying piece counts and stunning
                    artwork.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Puzzle Game App</h3>
                <p>Download our puzzle game app for iOS and Android and enjoy hours of addictive gameplay on the go.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-box"></i>
                <h3>Custom Puzzle Design</h3>
                <p>Create your own personalized puzzle by uploading your favorite photos and we'll turn them into a
                    unique jigsaw puzzle.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <div class="container">
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
            <div id="message-sent" style="display: none; color: green; margin-top: 10px;">Message Sent!</div>
        </div>
    </section>

    <footer>
        &copy; 2024 Puzzle Product. All rights reserved.
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const messageSentDiv = document.getElementById('message-sent');

            contactForm.addEventListener('submit', function(event) {
                event.preventDefault();

                // Simulate sending the form data (replace with actual AJAX call)
                setTimeout(() => {
                    messageSentDiv.style.display = 'block';
                    contactForm.reset(); // Clear the form

                    // Hide the message after a few seconds
                    setTimeout(() => {
                        messageSentDiv.style.display = 'none';
                    }, 3000);
                }, 500); // Simulate delay
            });

            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>