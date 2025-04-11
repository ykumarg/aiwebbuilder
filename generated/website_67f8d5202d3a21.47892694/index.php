<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A professional blog website with modern design and responsive layout.">
    <meta name="keywords" content="blog, web development, responsive design, contact form, SEO">
    <meta name="author" content="Your Name">
    <title>My Blog</title>

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
            padding: 0;
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        nav a:hover {
            color: #bbb;
        }

        /* Header/Home Section */
        #home {
            background-color: #e9ecef;
            padding: 50px 0;
            text-align: center;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        #home p {
            font-size: 1.2em;
        }

        /* About Section */
        #about {
            padding: 50px 0;
        }

        #about h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Services Section */
        #services {
            background-color: #e9ecef;
            padding: 50px 0;
        }

        #services h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .service-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
        }

        #contact h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        #contact form {
            display: flex;
            flex-direction: column;
        }

        #contact label {
            margin-top: 10px;
        }

        #contact input,
        #contact textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #contact button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #contact button:hover {
            background-color: #555;
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
            .container {
                width: 90%;
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
        }
    </style>
</head>
<body>

    <nav>
        <div class="container">
            <h1>My Blog</h1>
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
            <h1>Welcome to My Blog</h1>
            <p>Sharing knowledge and insights about web development and more.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <div class="service-item">
                <h3>Web Development</h3>
                <p>Creating responsive and user-friendly websites.</p>
            </div>
            <div class="service-item">
                <h3>SEO Optimization</h3>
                <p>Improving website visibility in search engine results.</p>
            </div>
            <div class="service-item">
                <h3>Web Design</h3>
                <p>Design and development of front end web applications.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic client-side validation
            if (!name || !email || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // You would typically send this data to a server-side script for processing
            // Here, we'll just simulate a successful submission with an alert
            alert('Message sent successfully!\nName: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);

            // Clear form fields
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    </script>

</body>
</html>
```

<?php include "includes/footer.php"; ?>