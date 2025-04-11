<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Perfect Match - Dating Website</title>
    <meta name="description" content="Find love and meaningful connections with our modern dating website. Browse profiles, connect with singles, and start your journey today!">
    <meta name="keywords" content="dating, online dating, singles, love, relationships, match, connect">
    <meta name="author" content="Your Name/Company">

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        h1, h2, h3 {
            color: #e44d26;
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

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #e44d26;
        }

        /* Home Section */
        #home {
            background: url('https://images.unsplash.com/photo-1496200129303-79853564e754?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 150px 0;
            position: relative;
        }

        #home:before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for darkness */
          z-index: 1;
        }

        #home .container {
          position: relative;
          z-index: 2;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c63917;
        }

        /* About Section */
        #about {
            padding: 50px 0;
            background-color: #fff;
        }

        #about .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #about .about-text {
            width: 50%;
        }

        #about .about-image {
            width: 40%;
        }

        #about .about-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        #services .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 30px;
        }

        #services .service {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #services .service i {
            font-size: 2em;
            margin-bottom: 10px;
            color: #e44d26;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            background-color: #fff;
        }

        #contact form {
            display: flex;
            flex-direction: column;
            width: 60%;
            margin: auto;
        }

        #contact form label {
            margin-top: 10px;
            font-weight: bold;
        }

        #contact form input,
        #contact form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        #contact form button {
            padding: 12px 20px;
            background-color: #e44d26;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact form button:hover {
            background-color: #c63917;
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

            #home {
                padding: 100px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #about .container {
                flex-direction: column;
            }

            #about .about-text,
            #about .about-image {
                width: 100%;
                margin-bottom: 20px;
            }

            #contact form {
                width: 90%;
            }
        }

        /* Additional Styling */
        .highlight {
            color: #e44d26;
        }

        /* Optional: Add Font Awesome for icons (ensure you include the CSS link in the head) */
        /* Example: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> */

    </style>
</head>
<body>

    <nav>
        <div class="container">
            <h1><a href="#">MatchMade</a></h1>
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
            <h1>Find Your <span class="highlight">Perfect Match</span></h1>
            <p>Start your journey towards love and meaningful connections today. Browse profiles, connect with singles, and discover your ideal partner.</p>
            <a href="#" class="btn">Sign Up Now</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="about-text">
                <h2>About Us</h2>
                <p>Welcome to MatchMade, a leading online dating platform dedicated to helping singles find genuine connections. We believe that everyone deserves to find love and happiness, and we've built a platform that makes it easy and enjoyable to connect with like-minded individuals.</p>
                <p>Our mission is to provide a safe, inclusive, and user-friendly environment where you can explore your options, express yourself, and find someone special. Join our community today and start your journey towards lasting love.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1500828909229-95ca4d9c201f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Couple Smiling">
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="service">
                <i class="fas fa-users"></i>
                <h3>Extensive Profile Matching</h3>
                <p>Our advanced algorithms match you with compatible individuals based on your interests, values, and preferences.</p>
            </div>
            <div class="service">
                <i class="fas fa-heart"></i>
                <h3>Meaningful Connections</h3>
                <p>We foster genuine connections by providing tools for in-depth communication and shared experiences.</p>
            </div>
            <div class="service">
                <i class="fas fa-shield-alt"></i>
                <h3>Safe & Secure</h3>
                <p>Your safety is our priority. We employ robust security measures to protect your privacy and ensure a safe dating environment.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm" action="#" method="POST">
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

    <footer>
        <p>&copy; 2024 MatchMade. All rights reserved.</p>
    </footer>

    <script>
      document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Basic validation (you can add more)
        if (!name || !email || !message) {
          alert('Please fill in all fields.');
          return;
        }

        // Simulate sending data to a server (replace with actual AJAX/fetch code)
        console.log('Name:', name);
        console.log('Email:', email);
        console.log('Message:', message);

        alert('Message sent successfully! (Simulated)');

        // Reset the form
        document.getElementById('contactForm').reset();
      });
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>