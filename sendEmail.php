<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assignation des données du formulaire à des variables
    $name = htmlspecialchars($_POST['firstname']);
    $subject = htmlspecialchars($_POST['sujet']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['subject']);
    
    // Votre adresse email
    $to = 'syhnes@gmail.com';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Message
    $fullMessage = "Vous avez reçu un message de: $name\n\n$message";

    // Envoi de l'email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo 'Votre message a été envoyé avec succès.';
    } else {
        echo 'Désolé, une erreur est survenue lors de l\'envoi de votre message.';
    }
}
?>
