<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your perfect match on our dating website. Connect with singles, build meaningful relationships, and discover love.">
    <meta name="keywords" content="dating, dating website, online dating, singles, relationships, love, match, connection">
    <meta name="author" content="AI Web Developer">
    <title>Dating Website - Find Your Match</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
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
            padding: 0px 20px;
        }

        /* Navigation */
        header {
            background: #35424a;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
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

        /* Showcase */
        #showcase {
            min-height: 400px;
            background:url('https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat 0 -200px;
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

        /* Sections */
        section {
            padding: 40px 0;
        }

        #about, #services {
            background-color: #fff;
        }

        #about h2, #services h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #about p, #services p {
            text-align: justify;
        }

        .box {
            float: left;
            width: 30%;
            padding: 10px;
            text-align: center;
        }

        .box img {
            width: 90px;
        }

        /* Contact */
        #contact {
            background-color: #35424a;
            color: #fff;
            padding: 30px 0;
        }

        #contact h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact input, #contact textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #contact button {
            background-color: #e8491d;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Footer */
        footer {
            padding: 20px;
            margin-top: 20px;
            color: #fff;
            background-color: #e8491d;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header #branding,
            header nav,
            header nav li {
                float: none;
                text-align: center;
            }

            header h1 {
                margin-bottom: 10px;
            }

            #showcase h1 {
                font-size: 35px;
            }

            #showcase p {
                font-size: 16px;
            }

            .box {
                width: 100%;
                margin-bottom: 20px;
            }

            #contact form {
                width: 90%;
            }

            .container {
              width: 95%;
            }

            #showcase {
              min-height: 300px;
              background-position: 0 -100px;

            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Dating</span> Website</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home" class="current">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Find Your Perfect Match Today!</h1>
            <p>Connect with like-minded singles and start your journey to love.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a dating website dedicated to helping people find meaningful connections and lasting relationships. Our platform provides a safe and user-friendly environment where you can meet compatible singles, explore shared interests, and build genuine bonds. Our mission is to empower you to discover love and companionship in a supportive community.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="box">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077045.png" alt="Profile Matching">
                <h3>Profile Matching</h3>
                <p>We use advanced algorithms to match you with compatible singles based on your preferences, interests, and values.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.flaticon.com/512/3026/3026734.png" alt="Secure Communication">
                <h3>Secure Communication</h3>
                <p>Our platform offers secure messaging and video chat features, ensuring your privacy and safety as you connect with other members.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.flaticon.com/512/2619/2619428.png" alt="Dating Tips">
                <h3>Dating Tips & Advice</h3>
                <p>Access expert advice and helpful resources to navigate the world of dating with confidence and success.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
                <div id="formMessage"></div>
            </form>
        </div>
    </section>

    <footer>
        <p>Dating Website, Copyright &copy; 2024</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Simulate sending data to a server (replace with actual AJAX call)
            setTimeout(() => {
                document.getElementById('formMessage').textContent = 'Message sent successfully!';
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('message').value = '';
            }, 500);
        });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>