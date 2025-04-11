<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your perfect match with our modern dating app. Connect with singles, build meaningful relationships, and start your love story today.">
    <meta name="keywords" content="dating app, online dating, singles, relationships, love, match">
    <meta name="author" content="Your Name">
    <title>Connect - Modern Dating App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
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
            z-index: 100; /* Ensure nav stays on top */
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Header/Home Section */
        #home {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1488229297570-cd209c572e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e91e63;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #c2185b;
        }

        /* About Section */
        #about {
            padding: 50px 0;
            background-color: #fff;
        }

        #about .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #about img {
            width: 45%;
            border-radius: 8px;
        }

        #about .about-text {
            width: 50%;
        }

        #about h2 {
            font-size: 2.5em;
            margin-bottom: 15px;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background-color: #f4f4f4;
        }

        #services h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service i {
            font-size: 3em;
            margin-bottom: 15px;
            color: #e91e63;
        }

        .service h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            background-color: #fff;
        }

        #contact h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact .form-group {
            margin-bottom: 20px;
        }

        #contact label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        #contact textarea {
            height: 150px;
        }

        #contact button[type="submit"] {
            background-color: #e91e63;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        #contact button[type="submit"]:hover {
            background-color: #c2185b;
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
            .container {
                width: 95%;
            }

            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 10px;
                flex-direction: column;
            }

            nav li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #home p {
                font-size: 1em;
            }

            #about .container {
                flex-direction: column;
                text-align: center;
            }

            #about img {
                width: 100%;
                margin-bottom: 20px;
            }

            #about .about-text {
                width: 100%;
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
            <h1>Connect</h1>
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
            <h1>Find Your Perfect Match</h1>
            <p>Connect with singles and build meaningful relationships with our innovative dating app.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="About Us">
            <div class="about-text">
                <h2>About Connect</h2>
                <p>Connect is a modern dating app designed to help you find genuine connections. We believe that finding love should be fun, easy, and safe. Our app uses advanced matching algorithms to connect you with compatible singles who share your interests and values.</p>
                <p>Join our community today and start your journey to finding lasting love!</p>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service">
                    <i class="fas fa-heart"></i>
                    <h3>Smart Matching</h3>
                    <p>Our intelligent matching algorithm connects you with compatible partners based on your preferences and interests.</p>
                </div>
                <div class="service">
                    <i class="fas fa-comments"></i>
                    <h3>Private Chat</h3>
                    <p>Enjoy secure and private conversations with your matches in our integrated chat platform.</p>
                </div>
                <div class="service">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Verified Profiles</h3>
                    <p>We verify all profiles to ensure a safe and authentic dating experience for all our users.</p>
                </div>
                <div class="service">
                  <i class="fas fa-smile"></i>
                  <h3>Fun and Engaging</h3>
                  <p>Enjoy various features like icebreakers, quizzes, and interactive games to make dating more fun and engaging.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
            <div id="formResponse" style="margin-top: 20px; text-align: center;"></div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Connect Dating App. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you can add more robust validation)
            if (!name || !email || !message) {
                document.getElementById('formResponse').textContent = 'Please fill out all fields.';
                return;
            }

            // Simulate sending data (replace with actual API call)
            setTimeout(function() {
                document.getElementById('formResponse').textContent = 'Message sent successfully!';
                document.getElementById('contactForm').reset(); // Clear the form
            }, 1000);
        });
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>