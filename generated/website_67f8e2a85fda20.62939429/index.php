<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Product - Shop Online</title>
    <meta name="description" content="Buy our amazing product online. Fast shipping and great customer service.">
    <meta name="keywords" content="online shopping, product, buy online, shop">
    <meta name="author" content="Your Name">

    <style>
        /* Basic Reset */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 1rem;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100; /* Ensure it stays on top */
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
        }

        nav ul li a:hover {
            text-decoration: none;
            color: #ddd;
        }

        /* Hero Section */
        #home {
            background-color: #e9ecef;
            padding: 5rem 0;
            text-align: center;
        }

        #home h1 {
            font-size: 3rem;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 1rem 2rem;
            border-radius: 5px;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: #0056b3;
            text-decoration: none;
        }

        /* About Section */
        #about {
            padding: 4rem 0;
        }

        #about .container {
            display: flex;
            align-items: center;
        }

        #about img {
            width: 50%;
            margin-right: 2rem;
        }

        #about p {
            margin-bottom: 1rem;
        }

        /* Services Section */
        #services {
            background-color: #f8f9fa;
            padding: 4rem 0;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .service {
            padding: 2rem;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .service h3 {
            margin-bottom: 0.5rem;
        }

        /* Contact Section */
        #contact {
            padding: 4rem 0;
            text-align: center;
        }

        #contact form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 1rem;
            text-align: left;
        }

        #contact input,
        #contact textarea {
            padding: 0.75rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            #about .container {
                flex-direction: column;
            }

            #about img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 1rem;
            }

            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 1rem;
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <a href="#">Your Product</a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <h1>Welcome to Your Product Online Store</h1>
            <p>Discover amazing products and shop online with ease.</p>
            <a href="#contact" class="btn">Contact Us</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <img src="https://via.placeholder.com/400" alt="Product Image">
            <div>
                <h2>About Our Product</h2>
                <p>We are dedicated to providing high-quality products and excellent customer service. Our product is designed to meet your needs and exceed your expectations.</p>
                <p>Learn more about our mission and values.</p>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Fast Shipping</h3>
                    <p>We offer fast and reliable shipping to ensure you receive your product quickly.</p>
                </div>
                <div class="service">
                    <h3>Secure Payments</h3>
                    <p>Your payment information is secure with our encrypted payment gateway.</p>
                </div>
                <div class="service">
                    <h3>Customer Support</h3>
                    <p>Our customer support team is available to assist you with any questions or concerns.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="btn">Submit</button>
            </form>
            <div id="responseMessage" style="margin-top: 10px;"></div>
        </div>
    </section>

    <footer>
        <div class="container">
            &copy; 2024 Your Product. All rights reserved.
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const formData = new FormData(form);

            fetch('https://formspree.io/f/YOUR_FORM_ID', {  //Replace YOUR_FORM_ID with your actual formspree id
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    document.getElementById('responseMessage').textContent = 'Thanks for your submission!';
                    form.reset(); // Clear the form
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            document.getElementById('responseMessage').textContent = 'Oops! There was a problem submitting your form';
                        } else {
                            document.getElementById('responseMessage').textContent = 'Oops! There was a problem submitting your form';
                        }
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('responseMessage').textContent = 'Oops! There was a problem submitting your form';
            });
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>