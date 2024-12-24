<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    </style>
</head>
<script src="./../assets/js/contact.js"></script>

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
</body>
</html>


