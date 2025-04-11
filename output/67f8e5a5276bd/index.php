<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Anil Ka Truck - Your trusted trucking partner. Providing reliable and efficient transportation services.">
    <meta name="keywords" content="trucking, transportation, logistics, delivery, Anil Ka Truck">
    <meta name="author" content="Anil Ka Truck Web Developer">
    <title>Anil Ka Truck - Reliable Transportation Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        header #branding {
            float: left;
        }

        header #branding h1 {
            margin: 0;
        }

        header nav {
            float: right;
            margin-top: 10px;
        }

        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }

        header a:hover {
            color: #ccc;
            font-weight: bold;
        }

        /* Showcase Styles */
        #showcase {
            min-height: 400px;
            background: url('https://source.unsplash.com/1600x900/?truck') no-repeat center center/cover;
            text-align: center;
            color: #fff;
            padding-top: 50px;
        }

        #showcase h1 {
            margin-top: 100px;
            font-size: 55px;
            margin-bottom: 10px;
        }

        #showcase p {
            font-size: 20px;
        }

        /* About Section Styles */
        #about {
            padding: 20px;
            background: #fff;
            color: #333;
        }

        #about h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Services Section Styles */
        #services {
            background: #f4f4f4;
            padding: 20px;
        }

        #services h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #services .box {
            padding: 20px;
            margin-bottom: 20px;
            border: #e8491d 1px solid;
            border-radius: 5px;
        }

        #services .box h3 {
            text-align: center;
        }

        /* Contact Section Styles */
        #contact {
            background: #fff;
            padding: 20px;
        }

        #contact h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #contact form {
            padding: 15px;
        }

        #contact .form-group {
            margin-bottom: 15px;
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
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #contact button {
            background: #e8491d;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #contact button:hover {
            background: #333;
        }

        /* Footer Styles */
        footer {
            padding: 20px;
            margin-top: 20px;
            color: #fff;
            background-color: #e8491d;
            text-align: center;
        }

        /* Utility classes */
        .btn {
            background-color: #e8491d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #333;
        }

        /* Mobile Responsive */
        @media(max-width: 768px) {
            header #branding,
            header nav,
            header nav li {
                float: none;
                text-align: center;
            }

            header h1 {
                margin-bottom: 10px;
            }

            #showcase h1 {
                font-size: 35px;
            }

            #showcase p {
                font-size: 16px;
            }

            .container {
                width: 100%;
                padding: 0 10px;
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Anil</span> Ka Truck</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Reliable Transportation Services</h1>
            <p>Your trusted partner for all your trucking needs.</p>
            <a href="#contact" class="btn">Get a Quote</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Anil Ka Truck is a leading transportation company dedicated to providing reliable and efficient trucking services. We have years of experience in the industry and are committed to delivering exceptional customer service. Our fleet of modern trucks and experienced drivers ensures that your goods are delivered safely and on time.</p>
            <p>We pride ourselves on our commitment to safety, reliability, and customer satisfaction.  Whether you need local or long-distance transportation, we have the expertise and resources to meet your needs.</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="box">
                <i class="fa fa-truck fa-3x" aria-hidden="true"></i>
                <h3>Local Delivery</h3>
                <p>We offer fast and reliable local delivery services to businesses and individuals. We handle all types of cargo with care and efficiency.</p>
            </div>
            <div class="box">
                <i class="fa fa-road fa-3x" aria-hidden="true"></i>
                <h3>Long Distance Transport</h3>
                <p>We provide long-distance transportation services across the country. Our experienced drivers and modern trucks ensure safe and timely delivery of your goods.</p>
            </div>
            <div class="box">
                <i class="fa fa-warehouse fa-3x" aria-hidden="true"></i>
                <h3>Warehousing & Storage</h3>
                <p>We offer secure warehousing and storage solutions for your goods. Our facilities are equipped with state-of-the-art security systems and are managed by experienced professionals.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>Anil Ka Truck, Copyright &copy; 2024</p>
    </footer>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      // Basic validation (you can add more sophisticated validation)
      if (!name || !email || !message) {
        alert('Please fill in all fields.');
        return;
      }

      // Simulate form submission with a simple alert (replace with actual submission logic)
      alert(`Name: ${name}\nEmail: ${email}\nMessage: ${message}\n\nForm submitted successfully! (This is a simulation)`);

      // Reset the form (optional)
      document.getElementById('contactForm').reset();
    });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>