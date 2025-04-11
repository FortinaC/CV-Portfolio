<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    
    $to = "chris.fortina@gmail.com";  

   
    $email_subject = "Nouveau message de contact : $subject";

    
    $email_body = "Nom : $name\n";
    $email_body .= "Email : $email\n\n";
    $email_body .= "Message :\n$message\n";

   
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>

