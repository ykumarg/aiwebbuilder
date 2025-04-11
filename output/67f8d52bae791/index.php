<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blog Website</title>
    <meta name="description" content="A modern and responsive blog website for sharing your thoughts and ideas.">
    <meta name="keywords" content="blog, modern, responsive, web development, articles">
    <meta name="author" content="Your Name">

    <style>
        /* General Styles */
        body {
            font-family: sans-serif;
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
            padding: 0 20px;
        }

        h1,
        h2,
        h3 {
            color: #333;
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
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
            margin: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #555;
        }

        /* Header/Home Section */
        #home {
            background: url('https://images.unsplash.com/photo-1555952494-efd681c7e3f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
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
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #555;
        }

        /* About Section */
        #about {
            padding: 50px 0;
            text-align: center;
        }

        #about h2 {
            margin-bottom: 30px;
        }

        #about p {
            margin-bottom: 20px;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background-color: #eee;
        }

        #services .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service {
            width: 30%;
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .service i {
            font-size: 2em;
            margin-bottom: 10px;
            color: #333;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            text-align: center;
        }

        #contact h2 {
            margin-bottom: 30px;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact form label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        #contact form input,
        #contact form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #contact form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact form button:hover {
            background-color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Mobile Responsive */
        @media(max-width: 768px) {
            .container {
                width: 90%;
            }

            nav .container {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 10px;
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            #home {
                padding: 50px 0;
            }

            #home h1 {
                font-size: 2.5em;
            }

            #home p {
                font-size: 1.1em;
            }

            #services .container {
                flex-direction: column;
            }

            .service {
                width: 80%;
                margin-bottom: 20px;
            }

            #contact form {
                width: 90%;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav>
        <div class="container">
            <h1><a href="#">My Blog</a></h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="container">
            <h1>Welcome to My Blog</h1>
            <p>Sharing my thoughts, ideas, and experiences with the world.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim
                sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultricies diam. Maecenas ligula massa,
                varius a, semper congue, euismod non, mi.</p>
            <p>Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.
                Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut
                in risus volutpat libero euismod viverra. Suspendisse potenti. Fusce congue, turpis ut ultricies semper,
                pede magna laoreet pede, vel vehicula augue magna eu metus.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="service">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>Developing modern and responsive websites for your business.</p>
            </div>
            <div class="service">
                <i class="fas fa-paint-brush"></i>
                <h3>Web Design</h3>
                <p>Creating beautiful and user-friendly website designs.</p>
            </div>
            <div class="service">
                <i class="fas fa-chart-line"></i>
                <h3>SEO Optimization</h3>
                <p>Optimizing your website for search engines to improve visibility.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form id="contactForm" action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
                <div id="form-response"></div>
            </form>
        </div>
    </section>

    <footer>
        <p>Copyright &copy; 2024 My Blog</p>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic validation (can be improved with more robust checks)
            if (!name || !email || !message) {
                document.getElementById('form-response').textContent = 'Please fill out all fields.';
                document.getElementById('form-response').style.color = 'red'; // Add error message style
                return;
            }


            // Simulate sending data (replace with actual API call later)
            setTimeout(() => {
              document.getElementById('form-response').textContent = 'Message sent successfully!';
              document.getElementById('form-response').style.color = 'green'; // Add success message style
              document.getElementById('name').value = '';
              document.getElementById('email').value = '';
              document.getElementById('message').value = '';


            }, 1000); // Simulate 1 second delay
        });
    </script>
</body>

</html>
```

<?php include "includes/footer.php"; ?>