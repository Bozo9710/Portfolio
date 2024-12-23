<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio LOTHAIRE</title>
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <!-- En-tête avec navigation -->
    
    <?php
    // Inclure l'en-tête
    include('page/header.php');

    include('page/accueil.php');

    include('page/competences.php');

    include('page/realisations.php');

    include('page/formations.php');

    include('page/contact.php');

    include('page/footer.php');



    ?>


</body>
</html>
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        const header = document.querySelector('header');
        const headerHeight = header ? header.offsetHeight : 0; // Vérifie si le header existe

        // Ajuste encore plus le décalage si nécessaire
        const offset = 65; // Décalage supplémentaire pour éviter d’être trop collé au header

        if (target) {
            window.scrollTo({
                top: target.offsetTop - headerHeight - offset,
                behavior: 'smooth',
            });
        }
    });
});

</script>
<?php
// Définir la page actuelle pour charger un CSS spécifique
$page = isset($_GET['page']) ? $_GET['page'] : 'index'; // Par défaut 'index' si aucune page n'est spécifiée
?>