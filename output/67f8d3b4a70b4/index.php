<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Store Name</title>
    <meta name="description" content="Your store description here. Keywords: store, products, online shop">
    <meta name="keywords" content="store, products, online shop">
    <meta name="author" content="Your Name">
    <link rel="icon" href="data:,">
    <style>
        /* Basic Reset */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
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
            padding: 0 1rem;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 1rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Hero Section */
        #home {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 8rem 0;
        }

        #home h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #home p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Section Styles */
        section {
            padding: 4rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        /* About Section */
        #about .content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        #about img {
            max-width: 400px;
            border-radius: 8px;
        }

        #about p {
            font-size: 1.1rem;
        }

        /* Services Section */
        #services .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db; /* Example icon color */
        }

        .service h3 {
            margin-bottom: 0.5rem;
        }

        /* Contact Section */
        #contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        #contact .form-group {
            margin-bottom: 1.5rem;
        }

        #contact label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        #contact textarea {
            resize: vertical;
        }

        #contact button {
            background-color: #333;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1rem;
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
            padding: 1rem 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 1rem;
                flex-direction: column;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 0.5rem;
            }

            #about .content {
                flex-direction: column;
            }

            #about img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="container">
            <h1>Your Store</h1>
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
            <h1>Welcome to Your Store</h1>
            <p>Your one-stop shop for quality products and excellent service.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="content">
                <img src="https://via.placeholder.com/400x300" alt="About Us Image">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>Online Shopping</h3>
                    <p>Shop from the comfort of your home with our easy-to-use online store.</p>
                </div>
                <div class="service">
                    <i class="fas fa-truck"></i>
                    <h3>Fast Delivery</h3>
                    <p>We offer fast and reliable delivery to your doorstep.</p>
                </div>
                <div class="service">
                    <i class="fas fa-headphones"></i>
                    <h3>Customer Support</h3>
                    <p>Our dedicated customer support team is here to assist you with any questions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Your Store. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you can add more robust validation)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate sending the form data (replace with your actual backend logic)
            console.log('Form submitted with:', { name, email, message });
            alert('Form submitted successfully! (This is a simulation)');

            // Reset the form
            document.getElementById('contactForm').reset();
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>


<?php include "includes/footer.php"; ?>