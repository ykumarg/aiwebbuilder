<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your own bidding website with our easy-to-use platform. Start an auction today!">
    <meta name="keywords" content="bidding website, auction platform, create auction, online bidding, responsive design">
    <meta name="author" content="Your Name">
    <title>Bidding Website Creator</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            background: #333;
            color: #fff;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: right;
        }

        nav li {
            display: inline;
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #f0f0f0;
        }

        .logo {
            float: left;
            font-size: 1.5em;
            font-weight: bold;
        }

        /* Header Section */
        #home {
            background: url('https://images.unsplash.com/photo-1508901802481-ca75d81eb74c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
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

        .btn {
            display: inline-block;
            background: #e44d26;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background: #c63d1b;
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
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background: #f4f4f4;
            text-align: center;
        }

        #services h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .service-card {
            display: inline-block;
            width: 30%;
            margin: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .service-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .service-card p {
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

        #contact label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        #contact input,
        #contact textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #contact button {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background: #555;
        }

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            nav ul {
                text-align: center;
            }

            nav li {
                display: block;
                margin: 10px 0;
            }

            .logo {
                float: none;
                text-align: center;
            }

            #home {
                padding: 100px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            .service-card {
                width: 90%;
                margin: 20px auto;
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
            <div class="logo">BiddingPlatform</div>
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
            <h1>Create Your Own Bidding Website</h1>
            <p>Launch your auction platform quickly and easily with our intuitive tools and responsive design.</p>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We provide a comprehensive platform for creating and managing your own bidding websites. Our user-friendly interface and powerful features make it easy to launch your auction business and attract bidders. We are dedicated to providing excellent support and innovative solutions to meet your needs.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-card">
                <h3>Customizable Templates</h3>
                <p>Choose from a variety of professionally designed templates to create a unique and engaging bidding website.</p>
            </div>
            <div class="service-card">
                <h3>Secure Payment Gateway</h3>
                <p>Integrate secure payment options to ensure safe and reliable transactions for your users.</p>
            </div>
            <div class="service-card">
                <h3>Real-Time Bidding</h3>
                <p>Provide a dynamic and exciting bidding experience with real-time updates and notifications.</p>
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
        <div class="container">
            <p>&copy; 2024 BiddingPlatform. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Simulate sending data (replace with actual API call)
            console.log('Form Data:', { name, email, message });
            alert('Form submitted successfully! (Simulated)');

            // Reset the form
            document.getElementById('contactForm').reset();
        });
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>