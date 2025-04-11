<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectSphere - Social Networking</title>
    <meta name="description" content="Connect and share with friends and family on ConnectSphere, the ultimate social networking platform.">
    <meta name="keywords" content="social network, social media, connect, share, friends, family">
    <meta name="author" content="ConnectSphere Team">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌐</text></svg>">

    <style>
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
        }

        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: 3px solid #e8491d;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            margin: 0;
            padding: 0;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        header #branding {
            float: left;
        }

        header #branding h1 {
            margin: 0;
        }

        header nav {
            float: right;
            margin-top: 10px;
        }

        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }

        header a:hover {
            color: #ccc;
            font-weight: bold;
        }

        #showcase {
            min-height: 400px;
            background: url('https://images.unsplash.com/photo-1505628353006-14b374358b48?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center/cover;
            text-align: center;
            color: #fff;
        }

        #showcase h1 {
            margin-top: 100px;
            font-size: 55px;
            margin-bottom: 10px;
        }

        #showcase p {
            font-size: 20px;
        }

        #newsletter {
            padding: 15px;
            color: #fff;
            background: #333;
        }

        #newsletter h1 {
            float: left;
        }

        #newsletter form {
            float: right;
            margin-top: 15px;
        }

        #newsletter input[type="email"] {
            padding: 4px;
            height: 25px;
            width: 250px;
        }

        .button_1 {
            height: 38px;
            background: #e8491d;
            border: 0;
            padding-left: 20px;
            padding-right: 20px;
            color: #fff;
        }

        #boxes {
            margin-top: 20px;
        }

        #boxes .box {
            float: left;
            text-align: center;
            width: 30%;
            padding: 10px;
        }

        #boxes .box img {
            width: 90px;
        }

        footer {
            padding: 20px;
            margin-top: 20px;
            color: #fff;
            background-color: #e8491d;
            text-align: center;
        }

        /* Contact Form Styles */
        #contact {
            padding: 30px 0;
            background-color: #fff;
        }

        #contact form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #contact form label {
            display: block;
            margin-bottom: 5px;
        }

        #contact form input[type="text"],
        #contact form input[type="email"],
        #contact form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Important for responsive sizing */
        }

        #contact form textarea {
            height: 150px;
        }

        #contact form button {
            background-color: #e8491d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #contact form button:hover {
            background-color: #c43c09;
        }

        /* About Section */
        #about {
          background-color: #fff;
          padding: 20px;
          text-align: justify;
        }

        /* Services Section */
        #services {
            background-color: #f9f9f9;
            padding: 20px;
        }

        #services h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #services ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #services li {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        #services li:hover {
            transform: translateY(-5px);
        }



        /* Media Queries */
        @media(max-width: 768px) {
            header #branding,
            header nav,
            header nav li,
            #newsletter h1,
            #newsletter form,
            #boxes .box {
                float: none;
                text-align: center;
                width: 100%;
            }

            header {
                padding-bottom: 5px;
            }

            #showcase h1 {
                margin-top: 40px;
            }

            #newsletter form {
                margin-top: 0;
            }

            #newsletter input[type="email"] {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Connect</span>Sphere</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Connect, Share, Discover</h1>
            <p>Join our vibrant community and connect with people from all over the world.</p>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Subscribe To Our Newsletter</h1>
            <form>
                <input type="email" placeholder="Enter Email...">
                <button type="submit" class="button_1">Subscribe</button>
            </form>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="https://img.icons8.com/color/96/000000/group.png" alt="Connect"/>
                <h3>Connect with Friends</h3>
                <p>Find and connect with your friends and family on ConnectSphere.</p>
            </div>
            <div class="box">
                <img src="https://img.icons8.com/color/96/000000/share.png" alt="Share"/>
                <h3>Share Your Moments</h3>
                <p>Share your photos, videos, and thoughts with your network.</p>
            </div>
            <div class="box">
                <img src="https://img.icons8.com/color/96/000000/discover.png" alt="Discover"/>
                <h3>Discover New Interests</h3>
                <p>Explore new communities and discover new interests on our platform.</p>
            </div>
        </div>
    </section>

    <section id="about">
      <div class="container">
        <h2>About ConnectSphere</h2>
        <p>ConnectSphere is a social networking platform designed to bring people together. Our mission is to provide a safe and engaging environment where individuals can connect with friends, share their experiences, and discover new interests. We believe in the power of community and strive to create a space where everyone feels welcome and valued. Whether you're looking to reconnect with old friends, make new ones, or explore new hobbies, ConnectSphere is the perfect place to start. Join us today and become part of a global community!</p>
      </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>
                    <h3>Personalized Profile</h3>
                    <p>Create a unique profile to showcase your personality and interests. Share your photos, updates, and more with your friends and followers.</p>
                </li>
                <li>
                    <h3>Groups & Communities</h3>
                    <p>Join groups and communities based on your interests. Connect with like-minded individuals and participate in discussions.</p>
                </li>
                <li>
                    <h3>Direct Messaging</h3>
                    <p>Stay in touch with your friends and family through our secure direct messaging system. Share messages, photos, and videos privately.</p>
                </li>
                <li>
                    <h3>News Feed</h3>
                    <p>Stay updated with the latest news and activities from your friends, family, and communities. Never miss an important moment.</p>
                </li>
            </ul>
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
        <p>ConnectSphere, Copyright &copy; 2024</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Basic validation (you can add more robust validation)
            if (!name || !email || !message) {
                alert('Please fill out all fields.');
                return;
            }

            // Simulate sending data (replace with actual API call if needed)
            console.log('Form Data:');
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            // Display success message (you can replace this with a nicer alert)
            alert('Message sent successfully!');

            // Clear the form
            document.getElementById('contactForm').reset();
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>