<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anil Ka Truck - Reliable Transportation Solutions</title>
    <meta name="description" content="Anil Ka Truck - Your trusted partner for all your transportation needs. We offer reliable and affordable trucking services.">
    <meta name="keywords" content="trucking, transportation, logistics, delivery, Anil Ka Truck">
    <meta name="author" content="Anil Ka Truck">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Header and Navigation */
        header {
            background-color: #fff;
            color: #fff;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
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
        }

        .logo span {
            color: #007bff;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links li a {
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #007bff;
        }

        /* Hero Section */
        .hero {
            background: url('https://images.unsplash.com/photo-1551721434-f6547bbddbc8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 10rem 0;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 1rem 2rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Sections (About, Services, Contact) */
        .section {
            padding: 4rem 0;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 5px;
        }

        .about-text {
            flex: 1;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .service-item i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #007bff;
        }

        /* Contact Section */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: vertical;
        }

        .contact-btn {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 1rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #0056b3;
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
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                margin-top: 1rem;
                flex-direction: column;
                width: 100%;
                text-align: center;
            }

            .nav-links li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            .about-content {
                flex-direction: column;
                text-align: center;
            }

            .about-image {
                margin-bottom: 20px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">Anil <span>Ka Truck</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Your Trusted Transportation Partner</h1>
            <p>Reliable and affordable trucking services tailored to your needs.</p>
            <a href="#contact" class="btn">Get a Quote</a>
        </div>
    </section>

    <section id="about" class="section">
        <h2 class="section-title">About Us</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1583301873425-4770a4c9d095?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                    alt="Truck Image">
            </div>
            <div class="about-text">
                <p>Anil Ka Truck is a leading transportation company dedicated to providing efficient and dependable
                    trucking solutions. With years of experience, we understand the importance of timely and secure
                    delivery. Our commitment to excellence and customer satisfaction sets us apart.</p>
                <p>We offer a wide range of services to meet your specific needs, from local deliveries to long-haul
                    transportation. Our modern fleet and experienced drivers ensure your goods are always in safe
                    hands.</p>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
            <div class="service-item">
                <i class="fas fa-truck"></i>
                <h3>Local Delivery</h3>
                <p>Fast and reliable delivery within your city.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-route"></i>
                <h3>Long-Haul Transport</h3>
                <p>Efficient transportation across states and borders.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-warehouse"></i>
                <h3>Warehousing</h3>
                <p>Secure and convenient storage solutions.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-box"></i>
                <h3>Specialized Freight</h3>
                <p>Expert handling of sensitive and oversized cargo.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-form">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="contact-btn">Send Message</button>
            </form>
             <div id="confirmationMessage" style="display:none; text-align:center; margin-top: 10px; color: green;">Thank you for your message! We'll be in touch soon.</div>
        </div>
    </section>

    <footer>
        &copy; 2024 Anil Ka Truck. All rights reserved.
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Basic validation (can be expanded)
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !message) {
                alert('Please fill in all fields.'); // Replace with better error handling
                return;
            }

            // Simulate successful submission (replace with actual submission logic)
            //In a real-world scenario, you would send the form data to a server-side script for processing.
            document.getElementById('contactForm').reset();
            document.getElementById('confirmationMessage').style.display = 'block';
            setTimeout(() => {
                document.getElementById('confirmationMessage').style.display = 'none';
            }, 5000); // Hide confirmation after 5 seconds


           //Disable button immediately to prevent multiple submissions
           const submitButton = document.querySelector('.contact-btn');
           submitButton.disabled = true;
           submitButton.textContent = 'Sending...';

           //Re-enable after a delay - simulating an API call
           setTimeout(() => {
             submitButton.disabled = false;
             submitButton.textContent = 'Send Message';
           }, 3000);
        });
    </script>
</body>

</html>


<?php include "includes/footer.php"; ?>