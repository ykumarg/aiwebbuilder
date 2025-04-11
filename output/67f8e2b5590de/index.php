<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buy products online with ease. Shop our wide selection of quality products and enjoy convenient delivery.">
    <meta name="keywords" content="online shopping, buy products, online store, shop online, best products, deals, discounts">
    <meta name="author" content="Your Name">
    <title>Online Product Store</title>
    <style>
        /* General Styles */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        /* Navigation */
        nav {
            background: #333;
            color: #fff;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Hero Section */
        #hero {
            background: url('https://images.unsplash.com/photo-1496181133206-80fa9e74850b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80') no-repeat center center/cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        #hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        #hero p {
            font-size: 1.2rem;
        }

        /* About Section */
        #about {
            padding: 3rem 0;
            background: #fff;
        }

        #about .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #about img {
            width: 45%;
            border-radius: 10px;
        }

        #about div {
            width: 50%;
        }

        /* Services Section */
        #services {
            padding: 3rem 0;
            background: #f4f4f4;
        }

        .service-cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service-card {
            background: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .service-card h3 {
            margin-bottom: 10px;
        }

        /* Contact Section */
        #contact {
            padding: 3rem 0;
            background: #333;
            color: #fff;
        }

        #contact .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        #contact form {
            width: 50%;
        }

        #contact .contact-info {
            width: 45%;
        }

        #contact label {
            display: block;
            margin-bottom: 5px;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background: #444;
            color: #fff;
        }

        #contact button {
            background: #fff;
            color: #333;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #contact button:hover {
            background-color: #ddd;
        }

        /* Footer */
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 10px;
                flex-direction: column;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            #hero {
                height: 400px;
            }

            #hero h1 {
                font-size: 2.5rem;
            }

            #about .container,
            #contact .container {
                flex-direction: column;
            }

            #about img,
            #about div,
            #contact form,
            #contact .contact-info {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <h1><a href="#">Your Store</a></h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <h1>Welcome to Our Online Store</h1>
            <p>Find the best products at the best prices.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1926&q=80" alt="About Us">
            <div>
                <h2>About Us</h2>
                <p>We are dedicated to providing high-quality products and excellent customer service. Our mission is to make online shopping easy and enjoyable for everyone.</p>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-cards">
                <div class="service-card">
                    <h3>Fast Shipping</h3>
                    <p>Enjoy fast and reliable shipping on all orders.</p>
                </div>
                <div class="service-card">
                    <h3>Secure Payments</h3>
                    <p>We offer secure payment options for your peace of mind.</p>
                </div>
                <div class="service-card">
                    <h3>24/7 Support</h3>
                    <p>Our customer support team is available 24/7 to assist you.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <form id="contact-form">
                <h2>Contact Us</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Address: 123 Main Street, Anytown USA</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@example.com</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Your Store. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic form validation - could add more robust validation
            if (!name || !email || !message) {
                alert("Please fill in all fields.");
                return;
            }

            // In a real-world application, you would send this data to a server
            // For this example, we'll just display the data in an alert
            alert(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);

            // Clear the form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>