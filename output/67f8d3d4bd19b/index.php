<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Store Name - Modern Responsive Website</title>
    <meta name="description" content="[Your Store Name] - Offering high-quality products/services. Browse our selection and contact us today!">
    <meta name="keywords" content="[Your Keywords: e.g., store, products, services, online shop, contact]">
    <meta name="author" content="Your Name/Company">
    <link rel="icon" href="data:,"> <!-- Suppress favicon error -->
    <style>
        /* CSS Reset */
        *,
        *::before,
        *::after {
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

        /* Header & Navigation */
        header {
            background-color: #fff;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        /* Sections */
        section {
            padding: 4rem 0;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        /* Home Section */
        #home {
            text-align: center;
            background-color: #e9ecef;
        }

        #home h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #home p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* About Section */
        #about p {
            margin-bottom: 1rem;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service {
            padding: 2rem;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        /* Contact Section */
        #contact form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: 0 auto;
        }

        #contact label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        #contact input,
        #contact textarea {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        #contact button {
            padding: 1rem 2rem;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1rem;
        }

        #contact button:hover {
            background-color: #218838;
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
            nav {
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

            #home h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <a href="#" class="logo">Your Store</a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to Our Store!</h1>
        <p>Your one-stop shop for all your needs. Explore our wide range of products and services.</p>
        <a href="#services" class="btn">Learn More</a>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a dedicated team committed to providing high-quality products and exceptional customer service. Our mission is to [State your mission here]. We have been serving the community for [Number] years and are passionate about [What you are passionate about].</p>
        <p>Our values are centered around [Your values: e.g., integrity, quality, customer satisfaction]. We strive to create a positive and rewarding experience for all our customers. Thank you for choosing us!</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service">
                <h3>Service 1</h3>
                <p>Description of service 1. Details about what this service offers to the clients.</p>
            </div>
            <div class="service">
                <h3>Service 2</h3>
                <p>Description of service 2. Details about what this service offers to the clients.</p>
            </div>
            <div class="service">
                <h3>Service 3</h3>
                <p>Description of service 3. Details about what this service offers to the clients.</p>
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
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <div id="successMessage" style="display:none; color:green; text-align:center; margin-top:10px;">Message sent successfully!</div>
        <div id="errorMessage" style="display:none; color:red; text-align:center; margin-top:10px;">Error sending message. Please try again.</div>
    </section>

    <footer>
        <p>&copy; 2024 Your Store. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const form = event.target;
            const formData = new FormData(form);

            fetch('https://formspree.io/f/YOUR_FORM_ID', {  // Replace YOUR_FORM_ID with your Formspree ID. Example: xoqlwbld
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    document.getElementById('successMessage').style.display = 'block';
                    document.getElementById('errorMessage').style.display = 'none';
                    form.reset(); // Clear the form after successful submission
                } else {
                    document.getElementById('errorMessage').style.display = 'block';
                    document.getElementById('successMessage').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('errorMessage').style.display = 'block';
                document.getElementById('successMessage').style.display = 'none';
            });
        });
    </script>

</body>

</html>
```

<?php include "includes/footer.php"; ?>