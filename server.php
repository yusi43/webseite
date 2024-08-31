<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten auslesen und gegen XSS schützen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Details
    $to = "yusuf.abdullahi2543@gmail.com"; // Ersetze dies durch deine E-Mail-Adresse
    $subject = "Neue Nachricht von " . $name;
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Nachricht:\n$message";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht. Bitte versuchen Sie es später erneut.";
    }
}
?>

