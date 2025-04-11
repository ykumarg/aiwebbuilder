<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your online store for quality products. Browse our selection and buy with confidence.">
    <meta name="keywords" content="online store, products, buy online, shop online">
    <meta name="author" content="Your Name">
    <title>Your Online Store</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
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

        nav .logo {
            float: left;
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        /* Header / Home Section */
        #home {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        #home p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #333;
        }

        /* About Section */
        #about {
            padding: 50px 0;
            text-align: center;
        }

        #about h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        #about p {
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        /* Services Section */
        #services {
            background-color: #f4f4f4;
            padding: 50px 0;
            text-align: center;
        }

        #services h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .service-box {
            display: inline-block;
            width: 30%;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
            vertical-align: top;
        }

        .service-box h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .service-box p {
            font-size: 1em;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            text-align: center;
        }

        #contact h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact form label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        #contact form input[type="text"],
        #contact form input[type="email"],
        #contact form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #contact form textarea {
            height: 150px;
        }

        #contact form button {
            background-color: #555;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        #contact form button:hover {
            background-color: #333;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav .logo {
                float: none;
                text-align: center;
            }

            nav ul {
                float: none;
                text-align: center;
                padding-top: 10px;
            }

            nav ul li {
                display: block;
                margin: 10px 0;
            }

            #home {
                padding: 50px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #home p {
                font-size: 1em;
            }

            .service-box {
                width: 90%;
                margin: 20px auto;
                display: block;
            }

            #contact form {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="container">
            <div class="logo">Your Store</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="container">
            <h1>Welcome to Our Online Store</h1>
            <p>Find the best products at the best prices. Shop now!</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are dedicated to providing high-quality products and excellent customer service. Our mission is to make online shopping easy and enjoyable for everyone.</p>
            <p>Established in 2023, we have grown to become a trusted name in the industry. We source our products from reliable suppliers and ensure that every item meets our strict quality standards.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-box">
                <h3>Fast Shipping</h3>
                <p>We offer fast and reliable shipping options to ensure your order arrives quickly.</p>
            </div>
            <div class="service-box">
                <h3>Secure Payments</h3>
                <p>Your payments are safe and secure with our encrypted payment gateway.</p>
            </div>
            <div class="service-box">
                <h3>Customer Support</h3>
                <p>Our friendly customer support team is available to assist you with any questions or concerns.</p>
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
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Your Online Store. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting in the traditional way

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you can add more complex validation if needed)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate sending data to a server (replace with your actual server-side code)
            console.log('Form submitted:');
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            // Display a success message (you can replace this with a more sophisticated UI)
            alert('Message sent successfully!');

            // Clear the form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>
</body>
</html>
```

<?php include "includes/footer.php"; ?>