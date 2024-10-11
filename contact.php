<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg">
    <?php
    include "nav.php";
    ?>
    <form>
        <section class="contact-section">
            <h1>Contact Us</h1>
            <p>Have questions or need assistance? We're here to help! At TravelHere, we love hearing from our users. Whether you have feedback, inquiries about destinations, or need help planning your next trip, don’t hesitate to reach out.</p>

            <div class="contact-details">
                <h2>Get in Touch</h2>
                <p>You can reach us by email, phone, or simply fill out the form below and our team will get back to you within 24-48 hours.</p>

                <ul class="contact-info">
                    <li><strong>Email:</strong> support@travelhere.com</li>
                    <li><strong>Phone:</strong> +1 (800) 123-4567</li>
                    <li><strong>Address:</strong> 123 TravelHere St., Wanderlust City, TX, USA</li>
                </ul>
            </div>

            <h2>Contact Form</h2>
            <p>Fill out the form below and we will get back to you as soon as possible:</p>

            <form id="contactForm">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="johndoe@example.com" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="How can we help?" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>

    </form>
    <script src="script.js"></script>
</body>

</html>