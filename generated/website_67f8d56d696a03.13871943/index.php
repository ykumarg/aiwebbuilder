<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Engaging puzzle games for all ages. Test your problem-solving skills and have fun!">
    <meta name="keywords" content="puzzle games, online puzzles, brain teasers, logic puzzles, jigsaw puzzles, free games">
    <meta name="author" content="Puzzle Games Inc.">
    <title>Puzzle Games - Challenge Your Mind</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧩</text></svg>">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
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
            background-color: #555;
        }

        /* Hero Section */
        #home {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1581885689982-4eb09163aa16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        #home h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Section Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* About Section */
        #about {
            background-color: #fff;
        }

        #about h3 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        #about p {
            font-size: 1.1em;
        }

        /* Services Section */
        #services {
            background-color: #f9f9f9;
        }

        #services h3 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .service-item h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .service-item p {
            font-size: 1em;
        }

        /* Contact Section */
        #contact {
            background-color: #fff;
        }

        #contact h3 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        #contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        #contact label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #contact button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: #0056b3;
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
            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav h1 {
                margin-bottom: 10px;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            #home {
                padding: 80px 0;
            }

            #home h2 {
                font-size: 2.5em;
            }

            #home p {
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="container">
            <h1>Puzzle Games</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">
        <h2>Sharpen Your Mind with Engaging Puzzles</h2>
        <p>Discover a world of captivating puzzle games designed to challenge your intellect and provide hours of entertainment. From classic brain teasers to innovative logic puzzles, we have something for every puzzle enthusiast.</p>
        <a href="#services" class="btn">Explore Our Games</a>
    </header>

    <section id="about" class="container">
        <h3>About Us</h3>
        <p>At Puzzle Games, we are passionate about creating high-quality, engaging puzzle experiences. Our team of dedicated developers and designers work tirelessly to bring you the best in brain-teasing entertainment. We believe that puzzles are not just a fun way to pass the time, but also a valuable tool for improving cognitive skills and promoting creative thinking.</p>
        <p>We offer a wide variety of puzzle types, including jigsaw puzzles, logic grid puzzles, word puzzles, and more. Whether you're a seasoned puzzle solver or just starting out, you'll find something to challenge and delight you here. We are constantly adding new games and features, so be sure to check back often!</p>
    </section>

    <section id="services" class="container">
        <h3>Our Games</h3>
        <div class="services-grid">
            <div class="service-item">
                <h4>Jigsaw Puzzles</h4>
                <p>Piece together beautiful images with our online jigsaw puzzles. Choose from a variety of difficulty levels and image categories.</p>
            </div>
            <div class="service-item">
                <h4>Logic Puzzles</h4>
                <p>Test your deductive reasoning skills with our challenging logic grid puzzles. Solve the clues and unravel the mystery!</p>
            </div>
            <div class="service-item">
                <h4>Word Puzzles</h4>
                <p>Exercise your vocabulary with our collection of word puzzles, including crosswords, word searches, and anagrams.</p>
            </div>
            <div class="service-item">
                <h4>Number Puzzles</h4>
                <p>Put your math skills to the test with our number-based puzzles, like Sudoku and KenKen.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="container">
        <h3>Contact Us</h3>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Puzzle Games Inc. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Basic validation
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // In a real application, you would send this data to a server-side script
            // For demonstration purposes, we'll just display an alert.
            alert('Message sent!\nName: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);

            // Clear the form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>