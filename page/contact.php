<?php
// Chargement du fichier YAML
$data = yaml_parse_file('data/contact.yaml');

// Vérification du fichier YAML
if (!$data) {
    die("Erreur : Impossible de charger le fichier YAML.");
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Destinataire de l'email (prend l'adresse dans le YAML)
    $destinataire = $data['email_destinataire'];
    $sujet = "Message depuis le formulaire de contact de mon portfolio";
    
    // Création du message
    $contenu = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";
    
    // Envoi de l'email
    if (mail($destinataire, $sujet, $contenu)) {
        $successMessage = "Votre message a été envoyé avec succès !";
        
        // Redirige vers la même page après soumission pour éviter la soumission multiple
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        $errorMessage = "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        /* Styles de la page de contact */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        #contact {
            max-width: 600px;
            margin: 50px auto;
            background: #c4daee;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;

        }

        #contact:hover{
            transform: scale(1.05);

        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            display: inline-block;
            background: linear-gradient(to right, #ff6347, #00bcd4); 
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }

        .success {
            color: #4caf50;
            text-align: center;
            margin-bottom: 20px;
        }

        .error {
            color: #f44336;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<main>
    <section id="contact">
        <h1>Contactez-moi</h1>

        <?php if (isset($successMessage)): ?>
            <p class="success"><?= $successMessage; ?></p>
        <?php elseif (isset($errorMessage)): ?>
            <p class="error"><?= $errorMessage; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        
        form.addEventListener('submit', function(event) {
            const nom = document.getElementById('nom').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!nom || !email || !message) {
                alert("Veuillez remplir tous les champs.");
                event.preventDefault();
            }
        });
    });
</script>

</body>
</html>
