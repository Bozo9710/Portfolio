<?php
    // Inclure le header
 //   include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio LOTHAIRE </title>
    <link rel="stylesheet" href="./css/accueil.css">
</head>
<body>

    <!-- En-tête avec navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="competences.php">Compétences</a></li>
                <li><a href="realisations.php">Réalisations</a></li>
                <li><a href="formations.php">Formations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section présentation de tes projets -->
    <section id="projets">
        <h1></h1>
        <div class="acceuil">
            <?php
            require_once("../yaml/yaml.php");
            $data=yaml_parse_file('../data/accueil.yaml');
            echo $data["Prenom"]." ".$data["Nom"]."<br>";
            echo '<img src="../image/'.$data["PDP"].'"><br> '; 
            echo $data["Date"] ;  
            echo $data["Titre2"];

            ?>
        </div>
    </section>

    <!-- Footer -->
    <?php // include('includes/footer.php'); ?>

</body>
</html>
