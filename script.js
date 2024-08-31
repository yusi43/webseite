document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('server.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        alert('Nachricht gesendet: ');
    }).catch(error => console.error('Fehler:', error));
});
document.getElementById('mobile-menu').addEventListener('click', function() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('open'); // Fügt die Klasse 'open' hinzu oder entfernt sie
});
