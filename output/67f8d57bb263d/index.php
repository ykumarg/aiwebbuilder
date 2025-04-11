<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Palace - Test Your Wits</title>
    <meta name="description" content="Challenge your mind with our collection of engaging puzzle games. Solve, strategize, and have fun!">
    <meta name="keywords" content="puzzle games, online puzzles, logic puzzles, brain teasers, riddles">
    <meta name="author" content="Puzzle Palace">
    <link rel="icon" href="data:,"> <!-- Fixes console error -->

    <style>
        /* General Styles */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Sections */
        section {
            padding: 40px 0;
        }

        #home {
            background-color: #e9e9e9;
            text-align: center;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        #home p {
            font-size: 1.2em;
        }

        #about, #services, #contact {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .service {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .service h3 {
            margin-bottom: 10px;
        }

        /* Contact Form */
        #contact form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 10px;
            font-weight: bold;
        }

        #contact input,
        #contact textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        #contact button {
            background-color: #333;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        #contact button:hover {
            background-color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                margin-top: 10px;
            }

            nav li {
                margin-left: 0;
                margin-bottom: 5px;
            }

            #home h1 {
                font-size: 2.5em;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Style for form feedback */
        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav>
        <div class="container">
            <a href="#" style="font-weight: bold; font-size: 1.2em;">Puzzle Palace</a>
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
            <h1>Welcome to Puzzle Palace</h1>
            <p>Sharpen your mind with our challenging and entertaining puzzle games. Get ready to think outside the box!</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Puzzle Palace is dedicated to providing a wide variety of engaging puzzle games for all ages and skill levels.  From classic logic puzzles to innovative brain teasers, we have something for everyone who enjoys a good mental workout. Our goal is to create a fun and stimulating environment where you can challenge yourself and improve your problem-solving abilities. We regularly update our collection with new and exciting puzzles, so be sure to check back often!</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Puzzles</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Logic Puzzles</h3>
                    <p>Test your deduction skills with our collection of logic grid puzzles and other reasoning challenges.</p>
                </div>
                <div class="service">
                    <h3>Word Puzzles</h3>
                    <p>Unscramble words, solve crosswords, and expand your vocabulary with our word-based puzzles.</p>
                </div>
                <div class="service">
                    <h3>Number Puzzles</h3>
                    <p>From Sudoku to Kakuro, challenge your numerical reasoning with our number puzzles.</p>
                </div>
                <div class="service">
                    <h3>Visual Puzzles</h3>
                    <p>Spot the difference, find hidden objects, and exercise your visual perception skills.</p>
                </div>
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

                <button type="submit">Submit</button>
                <div id="formMessage"></div>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            &copy; 2024 Puzzle Palace. All rights reserved.
        </div>
    </footer>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const form = event.target;
    const formData = new FormData(form);

    fetch('/', { // Submit to the same page
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (response.ok) {
            return response.text(); // or response.json() if your server returns JSON
        } else {
            throw new Error('Network response was not ok.');
        }
    })
    .then(data => {
        console.log('Success:', data);
        document.getElementById('formMessage').innerHTML = '<p class="success-message">Thank you! Your message has been received.</p>';
        form.reset();
    })
    .catch((error) => {
        console.error('Error:', error);
        document.getElementById('formMessage').innerHTML = '<p class="error-message">Oops! There was an error submitting your form.</p>';
    });
});

    //Basic JS to handle form submissions and feedback.  Needs server-side handling as well.
    </script>

</body>
</html>


<?php include "includes/footer.php"; ?>