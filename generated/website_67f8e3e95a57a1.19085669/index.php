<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your perfect match with our innovative dating app. Connect, chat, and create meaningful relationships.">
    <meta name="keywords" content="dating app, online dating, match, love, relationships, singles">
    <meta name="author" content="AI Web Developer">
    <title>Dating App - Find Your Match</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }

        /* Navigation Styles */
        nav {
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: color 0.3s ease;
            padding: 10px 15px;
            border-radius: 5px;
        }

        nav a:hover {
            color: #e44d26;
            background-color: #f0f0f0;
        }

        /* Hero Section Styles */
        #home {
            background: linear-gradient(to right, #fdd835, #e44d26);
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .cta-button {
            background-color: #fff;
            color: #e44d26;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #e44d26;
            color: #fff;
        }

        /* Section Styles */
        section {
            padding: 60px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        /* About Section Styles */
        #about p {
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Services Section Styles */
        #services .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .service-item {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .service-item i {
            font-size: 2em;
            color: #e44d26;
            margin-bottom: 15px;
        }

        .service-item h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .service-item p {
            font-size: 1em;
            line-height: 1.4;
        }

        /* Contact Section Styles */
        #contact form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 15px;
            font-weight: 600;
        }

        #contact input,
        #contact textarea {
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        #contact textarea {
            resize: vertical;
            min-height: 150px;
        }

        #contact button {
            background-color: #e44d26;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: #c63e1f;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                text-align: center;
            }

            nav li {
                margin: 10px 0;
            }

            #home {
                padding: 80px 20px;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #home p {
                font-size: 1.1em;
            }

            section {
                padding: 40px 20px;
            }

            section h2 {
                font-size: 2em;
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
        <h1>Find Your Perfect Match</h1>
        <p>Join our dating app and start connecting with amazing people. Discover love and build meaningful relationships.</p>
        <a href="#" class="cta-button">Get Started</a>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are dedicated to helping you find your soulmate. Our innovative matching algorithms and user-friendly interface make it easier than ever to connect with like-minded individuals. Join our community today and experience the joy of finding true love.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="service-grid">
            <div class="service-item">
                <i class="fas fa-heart"></i>
                <h3>Smart Matching</h3>
                <p>Our advanced algorithm ensures you're matched with people who share your interests and values.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-comments"></i>
                <h3>Secure Chat</h3>
                <p>Communicate safely with potential matches through our encrypted chat platform.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-user-shield"></i>
                <h3>Profile Verification</h3>
                <p>We verify profiles to ensure authenticity and provide a safe dating environment.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        &copy; 2024 Dating App. All rights reserved.
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic client-side validation (you should also have server-side validation)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simple email format validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Simulate form submission (replace with actual AJAX request to a server)
            alert('Form submitted!\nName: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);

            // Clear the form after submission
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>