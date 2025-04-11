<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ankur Singh Ka Restaurant - Delicious Indian Cuisine">
    <meta name="keywords" content="Indian Restaurant, Ankur Singh, Food, Curry, Biryani">
    <meta name="author" content="Your Name">
    <title>Ankur Singh Ka Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #e44d26; /* Restaurant Primary Color */
            transition: color 0.3s ease;
        }

        a:hover {
            color: #c63d1a;
        }

        img {
            width: 100%;
            height: auto;
            display: block;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            padding: 60px 0;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #222;
        }

        p {
            margin-bottom: 20px;
        }

        /* Navigation */
        nav {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #222;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #555;
            font-weight: 500;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #e44d26;
            color: #fff;
        }

        /* Home Section */
        #home {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1517248135469-4fe796d3d489?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); /* Replace with actual image URL */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 150px 0;
        }

        #home h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            background-color: #e44d26;
            color: #fff;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c63d1a;
        }

        /* About Section */
        #about {
            background-color: #fff;
        }

        #about .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        #about img {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Services Section */
        #services {
            background-color: #f0f0f0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-item {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-item i {
            font-size: 3rem;
            color: #e44d26;
            margin-bottom: 15px;
        }

        .service-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #222;
        }

        /* Contact Section */
        #contact {
            background-color: #fff;
        }

        #contact .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        #contact form {
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-bottom: 5px;
            font-weight: 500;
        }

        #contact input,
        #contact textarea {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        #contact button {
            background-color: #e44d26;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact button:hover {
            background-color: #c63d1a;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            #home {
                padding: 100px 0;
            }

            #home h1 {
                font-size: 3rem;
            }

            #home p {
                font-size: 1rem;
            }

            #about .container,
            #contact .container {
                grid-template-columns: 1fr;
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }

            nav ul li {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">Ankur Singh Ka Restaurant</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="section">
        <div class="container">
            <h1>Welcome to Ankur Singh Ka Restaurant</h1>
            <p>Experience the authentic taste of India.</p>
            <a href="#contact" class="btn">Order Now</a>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Restaurant Interior">
            <div>
                <h2>About Us</h2>
                <p>Ankur Singh Ka Restaurant brings you the finest Indian cuisine, prepared with fresh ingredients and
                    traditional recipes. Our chefs are passionate about creating dishes that will tantalize your taste
                    buds. We are committed to providing exceptional service and a memorable dining experience.</p>
                <p>Whether you're looking for a romantic dinner, a family gathering, or a quick lunch, Ankur Singh Ka Restaurant is the perfect choice.</p>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <h2>Our Services</h2>
        <div class="container">
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-utensils"></i>
                    <h3>Dine-In</h3>
                    <p>Enjoy a delightful meal in our cozy and inviting atmosphere.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-truck"></i>
                    <h3>Delivery</h3>
                    <p>Get your favorite dishes delivered right to your doorstep.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-birthday-cake"></i>
                    <h3>Catering</h3>
                    <p>We offer catering services for all your special events.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <div class="container">
            <div>
                <img src="https://images.unsplash.com/photo-1514985598372-d0036c9dc8cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="Delicious Food">
            </div>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Ankur Singh Ka Restaurant. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you should enhance this with more robust validation)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate sending data (replace with actual API call if needed)
            console.log('Form submitted!');
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            alert('Message sent successfully!'); // Replace with a more visually appealing confirmation

            // Reset the form
            document.getElementById('contactForm').reset();
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>