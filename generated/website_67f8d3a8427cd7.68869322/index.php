<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your one-stop shop for all your needs. Explore our quality products and excellent services.">
    <meta name="keywords" content="online store, products, services, shopping, deals">
    <meta name="author" content="Your Company Name">
    <title>Your Store Name</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
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
            padding: 0 20px;
        }

        /* Navigation */
        nav {
            background: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }

        nav li {
            display: inline;
            margin: 0 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
        }

        nav a:hover {
            color: #bbb;
        }

        /* Header/Hero Section */
        #home {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.2em;
            padding: 0 20px;
        }

        /* Section Styling */
        section {
            padding: 40px 0;
            text-align: center;
        }

        section h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        #about p, #services p {
            padding: 0 20px;
        }

        /* Services Section */
        #services .box {
            padding: 20px;
            margin: 20px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 5px;
        }

        #services .box h3 {
            margin-bottom: 10px;
        }

        /* Contact Section */
        #contact form {
            width: 60%;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        #contact label {
            display: block;
            margin-bottom: 5px;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Important for padding and border inclusion in width */
        }

        #contact textarea {
            height: 100px;
        }

        #contact button {
            background: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
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

            #home {
                padding: 50px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #services .box {
                width: 90%;
                margin: 20px auto;
            }

            #contact form {
                width: 90%;
            }
        }

        /* Service Boxes - Grid layout for larger screens */
        @media (min-width: 769px) {
            #services .services-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            #services .box {
                margin: 0; /* Remove individual margins on larger screens */
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
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
            <h1>Welcome to Our Store</h1>
            <p>We offer high-quality products and services to meet your needs. Explore our selection and discover amazing deals!</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are dedicated to providing excellent customer service and delivering top-notch products. Learn more about our mission and values.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="box">
                    <h3>Service 1</h3>
                    <p>Description of service 1. Details about what this service offers and how it can benefit you.</p>
                </div>
                <div class="box">
                    <h3>Service 2</h3>
                    <p>Description of service 2. Details about what this service offers and how it can benefit you.</p>
                </div>
                <div class="box">
                    <h3>Service 3</h3>
                    <p>Description of service 3. Details about what this service offers and how it can benefit you.</p>
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
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Your Store Name. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (can be enhanced)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate sending data (replace with actual API call)
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            // You would typically use fetch or XMLHttpRequest here to send the data to your server

            // Example using fetch (replace with your actual API endpoint)
            /*
            fetch('/your-api-endpoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name: name, email: email, message: message })
            })
            .then(response => {
                if (response.ok) {
                    alert('Message sent successfully!');
                    document.getElementById('contactForm').reset(); // Clear form
                } else {
                    alert('Error sending message.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error sending message.');
            });
            */

            // For demonstration, we'll just display a success message
            alert('Message sent successfully! (Simulated)');
            document.getElementById('contactForm').reset();
        });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>