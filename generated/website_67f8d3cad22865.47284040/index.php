<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your one-stop shop for quality products and services.">
    <meta name="keywords" content="store, products, services, online shopping, retail">
    <meta name="author" content="Your Company Name">
    <title>Your Store</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        /* Sections */
        section {
            padding: 50px 20px;
            text-align: center;
        }

        #home {
            background-color: #e9ecef;
        }

        #about {
            background-color: #fff;
        }

        #services {
            background-color: #f8f9fa;
        }

        #contact {
            background-color: #e9ecef;
        }

        /* Titles */
        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Paragraphs */
        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Contact Form */
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        form button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }

            h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            form {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <h2>Welcome to Our Store!</h2>
        <p>Your ultimate destination for quality products and exceptional services. Explore our wide range of offerings and discover something new today.</p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a dedicated team passionate about providing the best products and services to our customers. With years of experience in the industry, we strive to exceed expectations and build lasting relationships.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>We offer a variety of services tailored to meet your needs. From product consultations to custom solutions, we're here to help you succeed. Contact us to learn more about how we can assist you.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        &copy; 2024 Your Store. All rights reserved.
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you can add more robust validation)
            if (!name || !email || !message) {
                alert('Please fill out all fields.');
                return;
            }

            // Simulate sending data to a server (replace with actual AJAX request)
            console.log('Form data:', { name, email, message });
            alert('Form submitted successfully!\nName: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);

            // Clear the form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>