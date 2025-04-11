<?php
$pageTitle= 'Contact';
include 'header.php';
?>

<main class="formulaire"> 
<div class="contact-form-container">
        <h2>Contactez-moi</h2>
        <form action="submit_form.php" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Envoyer</button>
        </form>
    </div>
</main>


<?php include 'footer.php'; ?>