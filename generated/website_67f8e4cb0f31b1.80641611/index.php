<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ankur Singh Ka Restaurant - Delicious Indian Cuisine">
    <meta name="keywords" content="Ankur Singh, Restaurant, Indian Food, Fine Dining, Best Restaurant">
    <meta name="author" content="Ankur Singh">
    <title>Ankur Singh Ka Restaurant</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        a {
            color: #e44d26;
            text-decoration: none;
        }

        a:hover {
            color: #c7411f;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 0px;
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

        nav h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            padding: 0;
            list-style: none;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #e44d26;
        }

        /* Header Section */
        #home {
            background: url('https://images.unsplash.com/photo-1517248135464-672a94e9150c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 150px 0;
            position: relative; /* For pseudo-element */
        }

         /* Darken background image */
        #home::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust transparency as needed */
            z-index: 1; /* Place behind the content */
        }

        #home * {
             position: relative;
             z-index: 2; /* Ensure text is above the overlay */
         }

        #home h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 20px;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #about .about-content {
            width: 50%;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        #services .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 30px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .service-item i {
            font-size: 36px;
            margin-bottom: 15px;
            color: #e44d26;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            background-color: #fff;
        }

        #contact .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        #contact-form {
            width: 55%;
        }

        #contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        #contact-form input[type="text"],
        #contact-form input[type="email"],
        #contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        #contact-form textarea {
            height: 150px;
        }

        #contact-form button {
            background-color: #e44d26;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #contact-form button:hover {
            background-color: #c7411f;
        }

        .contact-info {
            width: 40%;
        }

        .contact-info h3 {
            margin-bottom: 15px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info i {
            margin-right: 8px;
            color: #e44d26;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Media Queries for Responsiveness */
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

            nav ul li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            #home {
                padding: 100px 0;
            }

            #home h1 {
                font-size: 36px;
            }

            #home p {
                font-size: 18px;
            }

            #about .container {
                flex-direction: column;
            }

            #about img {
                width: 100%;
                margin-bottom: 20px;
            }

            #about .about-content {
                width: 100%;
            }

            #services .container {
                grid-template-columns: 1fr;
            }

            #contact .container {
                flex-direction: column;
            }

            #contact-form {
                width: 100%;
            }

            .contact-info {
                width: 100%;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="container">
            <h1>Ankur Singh Ka Restaurant</h1>
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
            <h1>Welcome to Ankur Singh Ka Restaurant</h1>
            <p>Experience the finest Indian cuisine in a modern and inviting atmosphere.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Restaurant Interior">
            <div class="about-content">
                <h2>About Us</h2>
                <p>Ankur Singh Ka Restaurant is dedicated to providing an unforgettable dining experience. We blend traditional Indian recipes with a modern twist, using only the freshest ingredients.</p>
                <p>Our passionate chefs create authentic dishes that cater to all palates, from mild to spicy. We pride ourselves on exceptional service and a warm, welcoming ambiance.</p>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-item">
                <i class="fas fa-utensils"></i>
                <h3>Fine Dining</h3>
                <p>Enjoy a sophisticated dining experience with our expertly crafted menu and impeccable service.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-truck"></i>
                <h3>Delivery</h3>
                <p>Order online and have your favorite dishes delivered straight to your door. Fast and convenient!</p>
            </div>
            <div class="service-item">
                <i class="fas fa-calendar-alt"></i>
                <h3>Catering</h3>
                <p>Let us cater your next event! We offer customized menus to suit any occasion.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div id="contact-form">
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
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Anytown, USA</p>
                <p><i class="fas fa-phone"></i> (123) 456-7890</p>
                <p><i class="fas fa-envelope"></i> info@ankursinghrestaurant.com</p>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright &copy; 2024 Ankur Singh Ka Restaurant</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting traditionally

            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Basic validation (you can add more sophisticated validation)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

             // Display a simple success message (replace with AJAX for real submission)
            alert('Thank you for your message! We will get back to you soon.');

            // Reset the form fields
            document.getElementById('contactForm').reset();

        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>