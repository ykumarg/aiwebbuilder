<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Court - Delicious Dining Destination</title>
    <meta name="description"
        content="A vibrant food court offering diverse cuisines, a welcoming atmosphere, and a memorable dining experience.">
    <meta name="keywords" content="food court, dining, restaurant, cuisine, lunch, dinner, food, restaurants">
    <meta name="author" content="AI Web Developer">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
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
            --primary-color: #FF6B6B;
            --secondary-color: #4ECDC4;
            --accent-color: #FFE66D;
            --background-color: #F7FFF7;
            --text-color: #333;
            --light-text-color: #eee;
            --font-family-primary: 'Poppins', sans-serif;
            --font-family-secondary: 'Roboto', sans-serif;
        }

        /* Base Styles */
        body {
            font-family: var(--font-family-primary);
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: var(--light-text-color);
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e05a5a;
        }

        /* Navigation */
        nav {
            background-color: var(--background-color);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        nav ul {
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav a {
            color: var(--text-color);
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        /* Hero Section */
        #home {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: var(--light-text-color);
            text-align: center;
        }

        #home h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        /* About Section */
        #about .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        #about img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #about p {
            text-align: left;
        }


        /* Services Section */
        #services .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Contact Section */
        #contact .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        #contact form {
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-bottom: 5px;
            font-weight: 500;
        }

        #contact input,
        #contact textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: var(--font-family-secondary);
        }

        #contact button {
            padding: 12px 30px;
            background-color: var(--secondary-color);
            color: var(--light-text-color);
            border: none;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: #42b0a9;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: var(--light-text-color);
            text-align: center;
            padding: 20px 0;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .container {
                padding: 0 30px;
            }

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

            nav ul {
                margin-top: 20px;
                flex-direction: column;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 15px;
            }

            #home h1 {
                font-size: 3rem;
            }

            #home p {
                font-size: 1rem;
            }

            #about .container,
            #contact .container {
                grid-template-columns: 1fr;
            }
        }

        /* Animate On Scroll (AOS) Styles */
        [data-aos="fade-in"] {
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }

        [data-aos="fade-in"].aos-animate {
            opacity: 1;
        }

        /* Card shadow styling */
        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Gradient button */
        .gradient-button {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 14px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            outline: none;
        }

        .gradient-button:hover {
            background: linear-gradient(to right, #e05a5a, #42b0a9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <a href="#" class="logo">FoodCourt</a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Vendors</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home">
        <h1>Welcome to FoodCourt</h1>
        <p>A culinary journey awaits you. Explore diverse cuisines and flavors in one vibrant location.</p>
        <a href="#about" class="btn gradient-button">Learn More</a>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1517248135469-4fe796d4a49a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    alt="About Us">
            </div>
            <div data-aos="fade-left">
                <h2 class="section-title">About Our Food Court</h2>
                <p>FoodCourt is a premium dining destination offering a wide variety of cuisines from around the world.
                    We pride ourselves on providing a clean, comfortable, and enjoyable dining experience for all our
                    customers. Whether you're looking for a quick lunch or a relaxing dinner, FoodCourt has something
                    to satisfy every palate.</p>
                <p>Our vendors are carefully selected to ensure the highest quality of food and service. We strive to
                    create a welcoming and inclusive environment where everyone can enjoy a delicious meal.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <h2 class="section-title">Our Vendors</h2>
        <div class="container">
            <div class="service-card shadow" data-aos="fade-up">
                <i class="fas fa-pizza-slice"></i>
                <h3>Pizza Paradise</h3>
                <p>Delicious pizzas with fresh ingredients and a variety of toppings.</p>
            </div>
            <div class="service-card shadow" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-burger"></i>
                <h3>Burger Bliss</h3>
                <p>Gourmet burgers made with premium beef and flavorful sauces.</p>
            </div>
            <div class="service-card shadow" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-bowl-rice"></i>
                <h3>Asian Delights</h3>
                <p>Authentic Asian cuisine with a wide range of dishes to choose from.</p>
            </div>
            <div class="service-card shadow" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-taco"></i>
                <h3>Taco Fiesta</h3>
                <p>Flavorful tacos and Mexican specialties with fresh salsa and guacamole.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2 class="section-title">Contact Us</h2>
        <div class="container">
            <div data-aos="fade-right">
                <p>Have any questions or suggestions? Feel free to reach out to us using the form below.</p>
                <img src="https://images.unsplash.com/photo-1566829918693-0b8f6f1f3b85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                    alt="Contact Image">
            </div>
            <form data-aos="fade-left" id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 FoodCourt. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Contact Form Submission (Placeholder - replace with actual logic)
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent actual form submission (for demonstration)
            alert('Form submitted! (This is a placeholder - no actual email will be sent.)');
            // Add your actual form submission logic here (e.g., using Fetch API to send data to a server)
        });
    </script>

</body>

</html>
```

<?php include "includes/footer.php"; ?>