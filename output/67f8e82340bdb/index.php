<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buy puzzles online and enjoy our fun puzzle game app. Explore a wide selection of puzzles for all ages.">
    <meta name="keywords" content="puzzles, puzzle game, online shop, web developer, responsive design">
    <meta name="author" content="AI Web Crafter">
    <title>Puzzle Paradise: Shop & Play</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #ff4081;
            --text-color: #333;
            --light-text-color: #777;
            --background-color: #f9f9f9;
            --white: #fff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --border-radius: 10px;
            --font-family-primary: 'Poppins', sans-serif;
            --font-family-secondary: 'Roboto', sans-serif;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family-primary);
            font-size: 16px;
            color: var(--text-color);
            background-color: var(--background-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--secondary-color);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Reusable Components */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: var(--text-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: var(--shadow);
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Navigation */
        nav {
            background-color: var(--white);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo span {
            color: var(--secondary-color);
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--text-color);
            font-weight: 500;
            padding: 8px 12px;
            border-radius: var(--border-radius);
        }

        .nav-links a:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        /* Hero Section */
        #hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1526347171209-0785f086c3b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            color: var(--white);
            text-align: center;
            padding: 150px 0;
            position: relative;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7));
            z-index: 1;
        }

        #hero .container {
            position: relative;
            z-index: 2;
        }

        #hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        #hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        #hero .btn {
            background-color: var(--secondary-color);
        }

        /* About Section */
        #about .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        #about img {
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        #about h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        #about p {
            color: var(--light-text-color);
        }

        /* Services Section */
        #services {
            background-color: #f2f2f2;
        }

        #services .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service-card p {
            color: var(--light-text-color);
        }

        /* Contact Section */
        #contact {
            background-color: var(--white);
        }

        #contact .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        #contact form {
            display: flex;
            flex-direction: column;
        }

        #contact label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        #contact input,
        #contact textarea {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-family: var(--font-family-primary);
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        #contact button {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 12px 24px;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: var(--secondary-color);
        }

        /* Footer */
        footer {
            background-color: #222;
            color: var(--white);
            text-align: center;
            padding: 20px 0;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2rem;
            }

            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .logo {
                margin-bottom: 10px;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
                display: none; /* Hide initially */
            }

            .nav-links li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            .nav-links a {
                display: block;
                width: 100%;
                text-align: center;
            }

            #hero {
                padding: 100px 0;
            }

            #hero h1 {
                font-size: 2.5rem;
            }

            #hero p {
                font-size: 1rem;
            }

            #about .container {
                grid-template-columns: 1fr;
            }

            #about img {
                order: -1;
            }
            .nav-toggle {
                    display: block;
                    cursor: pointer;
                    padding: 5px;
                    border: none;
                    background: none;
                }

            .nav-toggle i {
                font-size: 1.5em;
                color: var(--text-color);
            }

            .nav-links.active {
            display: flex;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="container">
            <a href="#" class="logo">Puzzle<span>Paradise</span></a>
            <button class="nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Puzzles</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <h1>Unleash Your Inner Puzzle Master</h1>
            <p>Explore our amazing collection of puzzles and enjoy our addictive puzzle game app!</p>
            <a href="#services" class="btn">Shop Puzzles Now</a>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1587824274309-f44d2166a180?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Puzzles">
            <div>
                <h2>About Puzzle Paradise</h2>
                <p>We are passionate about puzzles and providing you with the best possible experience.  Our mission is to provide high-quality puzzles and a fun, engaging puzzle game app for puzzle lovers of all ages. From classic jigsaw puzzles to unique and challenging designs, we have something for everyone.</p>
                <p>Download our app and start your puzzle adventure today!</p>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <h2 class="section-title">Explore Our Puzzle Collection</h2>
        <div class="container">
            <div class="service-card">
                <i class="fas fa-puzzle-piece"></i>
                <h3>Jigsaw Puzzles</h3>
                <p>Classic jigsaw puzzles in various sizes and themes, from landscapes to animals to famous artworks.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-dice-d6"></i>
                <h3>3D Puzzles</h3>
                <p>Build intricate 3D models of famous landmarks, vehicles, and more. A challenging and rewarding experience!</p>
            </div>
            <div class="service-card">
                <i class="fas fa-brain"></i>
                <h3>Brain Teasers</h3>
                <p>Test your problem-solving skills with our collection of challenging brain teasers and logic puzzles.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2 class="section-title">Contact Us</h2>
        <div class="container">
            <form id="contactForm">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="btn">Send Message</button>
            </form>
            <div id="formMessage"></div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Puzzle Paradise. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
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

        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.querySelector('.nav-toggle');
            const navLinks = document.querySelector('.nav-links');

            navToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        });

        // Contact Form submission
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            fetch('https://formspree.io/f/YOUR_FORM_ID', {  // Replace with your Formspree Form ID
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    document.getElementById('formMessage').innerText = 'Thank you for your message!';
                    form.reset();
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            document.getElementById('formMessage').innerText = 'Oops! There was a problem submitting your form';
                        } else {
                            document.getElementById('formMessage').innerText = 'Oops! There was a problem submitting your form';
                        }
                    })
                }
            }).catch(error => {
                document.getElementById('formMessage').innerText = 'Oops! There was a problem submitting your form';
            });
        });
    </script>
</body>

</html>
```

<?php include "includes/footer.php"; ?>