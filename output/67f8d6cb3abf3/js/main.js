document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    
    // Form submission
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('includes/process_contact.php', {
                method: 'POST',
                body: formData
            }).then(() => {
                alert('Message sent successfully!');
                form.reset();
            }).catch(error => {
                console.error('Error:', error);
                alert('Failed to send message. Please try again.');
            });
        });
    }
});