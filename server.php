<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Daten in eine JSON-Datei speichern
    $data = array('name' => $name, 'email' => $email, 'message' => $message);
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('messages.json', $jsonData . PHP_EOL, FILE_APPEND);

    echo "Nachricht erfolgreich gesendet!";
}
?>
