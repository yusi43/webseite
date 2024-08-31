document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('server.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        alert('Nachricht gesendet: ' + data);
    }).catch(error => console.error('Fehler:', error));
});
