function showImages(country) {
    if (country === "India") {
        document.getElementById("images").innerHTML = "<img src='temple1.jpg'><img src='temple2.jpg'>";
    } else if (country === "Brazil") {
        document.getElementById("images").innerHTML = "<img src='beach1.jpg'><img src='beach2.jpg'>";
    }
}
// Contact form submission handling
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    // Simulate sending email (you'll need a backend or service like Formspree, EmailJS, etc. for real emails)
    alert(`Thank you, ${name}! Your message has been sent successfully.\nWe will respond to your email (${email}) as soon as possible.`);

    // Clear the form after submission
    document.getElementById('contactForm').reset();
});
