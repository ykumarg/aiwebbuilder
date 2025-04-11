<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your online store for quality products.">
    <meta name="keywords" content="online store, ecommerce, products, shop">
    <meta name="author" content="Your Name">
    <title>Your Online Store</title>
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
            z-index: 100; /* Ensure nav stays on top */
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ddd;
        }

        /* Header */
        header {
            background-color: #e9ecef;
            padding: 5rem 0;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        header p {
            font-size: 1.2rem;
        }

        /* Sections */
        section {
            padding: 3rem 0;
            text-align: center;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        section p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        /* About Section */
        #about {
            background-color: #fff;
        }

        /* Services Section */
        #services {
            background-color: #f9f9f9;
        }

        /* Contact Section */
        #contact {
            background-color: #fff;
        }

        /* Contact Form */
        #contact form {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 1rem;
            font-weight: bold;
            text-align: left;
        }

        #contact input,
        #contact textarea {
            padding: 0.75rem;
            margin-top: 0.5rem;
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
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
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
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                text-align: center;
            }

            nav ul li {
                margin: 0.5rem 0;
            }

            header h1 {
                font-size: 2.5rem;
            }

            section h2 {
                font-size: 2rem;
            }

            #contact form {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <header id="home">
        <h1>Welcome to Your Online Store!</h1>
        <p>Discover amazing products and shop with ease.</p>
    </header>

    <section id="about">
        <h2>About Us</h2>
        <p>We are dedicated to providing high-quality products and excellent customer service. Learn more about our mission and values.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>Explore the range of services we offer, including fast shipping, secure payments, and easy returns.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Fill out the form below to get in touch.</p>
        <form id="contactForm" action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        &copy; 2024 Your Online Store. All rights reserved.
    </footer>

    <script>
        // Contact Form Submission (Basic example - replace with actual submission logic)
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (you can add more robust validation)
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate form submission (replace with actual AJAX/fetch request)
            alert('Form submitted successfully!\nName: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);

            // Reset the form after submission (optional)
            document.getElementById('contactForm').reset();

            // You would typically send this data to a server-side script using AJAX/fetch
            // Example using fetch:
            /*
            fetch('/submit-form', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name: name, email: email, message: message })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Form submitted successfully!');
                    document.getElementById('contactForm').reset();
                } else {
                    alert('Form submission failed: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during form submission.');
            });
            */
        });
    </script>

</body>
</html>
```

<?php include "includes/footer.php"; ?>