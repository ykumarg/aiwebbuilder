<?php include "includes/header.php"; ?>

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connect, Share, and Discover: Your Social Network">
    <meta name="keywords" content="social network, connect, share, friends, community">
    <meta name="author" content="Your Name">
    <title>ConnectNow - Your Social Network</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
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
        }

        /* Navigation */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: sticky; /* Stick to the top */
            top: 0;
            z-index: 100; /* Ensure it's on top of other content */
        }

        nav ul {
            padding: 0;
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
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #bbb;
        }

        /* Header/Home Section */
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
        }

        /* About Section */
        #about {
            padding: 50px 0;
            text-align: center;
        }

        /* Services Section */
        #services {
            padding: 50px 0;
            background: #eee;
            text-align: center;
        }

        .service {
            padding: 20px;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            display: inline-block;
            width: 30%;
            vertical-align: top;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            text-align: center;
        }

        #contact form {
            width: 60%;
            margin: auto;
        }

        #contact label {
            display: block;
            margin-top: 10px;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #contact button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
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
                width: 95%;
            }

            nav ul {
                text-align: left;
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

            .service {
                width: 90%;
                display: block;
                margin: 20px auto;
            }

            #contact form {
                width: 90%;
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

    <header id="home">
        <div class="container">
            <h1>Welcome to ConnectNow</h1>
            <p>Connecting people, sharing moments, and building communities.</p>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>ConnectNow is a social networking platform designed to bring people together. We believe in the power of connection and strive to create a safe and engaging environment for users to share their lives, discover new interests, and build meaningful relationships.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service">
                <h3>Profile Creation</h3>
                <p>Create your personalized profile and showcase your interests and personality.</p>
            </div>
            <div class="service">
                <h3>Community Forums</h3>
                <p>Join or create forums based on your interests and connect with like-minded individuals.</p>
            </div>
            <div class="service">
                <h3>Secure Messaging</h3>
                <p>Private and secure messaging system for connecting with friends and family.</p>
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
                <p id="form-message"></p>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 ConnectNow. All rights reserved.</p>
    </footer>

    <script>
      document.getElementById('contactForm').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent the default form submission

          const form = event.target;
          const formData = new FormData(form);

          fetch('https://httpbin.org/post', {  // Replace with your actual form submission endpoint
              method: 'POST',
              body: formData,
          })
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }
              return response.json();
          })
          .then(data => {
              console.log('Success:', data);
              document.getElementById('form-message').innerText = 'Thank you! Your message has been received.';
              document.getElementById('form-message').style.color = 'green';
              form.reset(); // Clear the form after successful submission
          })
          .catch(error => {
              console.error('Error:', error);
              document.getElementById('form-message').innerText = 'Oops! There was an error submitting your form.  Please try again.';
              document.getElementById('form-message').style.color = 'red';
          });
      });
    </script>

</body>
</html>
```

<?php include "includes/footer.php"; ?>