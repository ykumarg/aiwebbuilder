<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BidVerse - Your Premier Bidding Platform</title>
    <meta name="description" content="BidVerse is a modern bidding platform connecting buyers and sellers. Participate in auctions, find deals, and more!">
    <meta name="keywords" content="bidding, auction, deals, online auction, buy, sell">
    <meta name="author" content="BidVerse">
    <link rel="canonical" href="https://yourdomain.com">

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }

        nav li {
            display: inline;
            margin: 0 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
        }

        nav a:hover {
            color: #bbb;
        }

        /* Header/Home Section */
        #home {
            background: url('https://images.unsplash.com/photo-1504384308090-c89ef4ca53cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 150px 0;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background: #bbb;
            color: #333;
        }

        /* About Section */
        #about {
            padding: 50px 0;
            text-align: center;
        }

        #about img {
            width: 50%;
            border-radius: 8px;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background: #ddd;
        }

        .service-box {
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            background: #eee;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact label {
            display: block;
            margin-bottom: 5px;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        #contact input[type="submit"] {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        #contact input[type="submit"]:hover {
            background: #bbb;
            color: #333;
        }

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Responsive Design */
        @media(max-width: 768px) {
            .container {
                width: 90%;
            }

            nav li {
                display: block;
                margin: 10px 0;
            }

            #home {
                padding: 100px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #about img {
                width: 80%;
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
            <h1>Welcome to BidVerse</h1>
            <p>The ultimate platform for online bidding and auctions.</p>
            <a href="#services" class="button">Explore Services</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="About BidVerse">
            <p>BidVerse is dedicated to providing a secure and efficient platform for buyers and sellers to connect. Our goal is to make online bidding accessible and enjoyable for everyone.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-box">
                <h3>Online Auctions</h3>
                <p>Participate in exciting online auctions and bid on a wide range of products.</p>
            </div>
            <div class="service-box">
                <h3>Secure Transactions</h3>
                <p>We ensure secure and reliable transactions for all our users.</p>
            </div>
            <div class="service-box">
                <h3>User-Friendly Interface</h3>
                <p>Our platform is designed to be intuitive and easy to use, even for beginners.</p>
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

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BidVerse. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Basic validation (you can add more)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate sending the form data (replace with actual API call)
            setTimeout(function() {
                alert('Thank you for your message! We will get back to you soon.');

                // Clear form fields
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('message').value = '';
            }, 500); // Simulate a 0.5 second delay
        });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>