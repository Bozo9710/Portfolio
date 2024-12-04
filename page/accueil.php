<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio LOTHAIRE</title>
    <link rel="stylesheet" href="./../css/accueil.css">
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
    <?php
    require_once("../yaml/yaml.php");
    $data=yaml_parse_file('../data/accueil.yaml');?>

    <!-- Section présentation de tes projets -->
    <section id="projets">
    
    <div class="bulle-container">
        <!-- Partie 1 -->
        <div class="bulle" id="bulle1">
            <h2><?php echo $data["Prenom"] . " " . $data["Nom"]; ?></h2>
            <img src="../image/<?php echo $data["PDP"]; ?>" alt="Photo de profil" class="pdp">
            <p class="date"><?php echo $data["Date"]; ?></p>
        </div>
        <!-- Partie 2 -->
        <div class="bulle" id="bulle2">
            <p class="mid"><?php echo $data["Titre2"]; ?></p>

            <p class="textA"><?php echo $data["TextA"]; ?></p>

            <img src="../image/<?php echo $data["ImageA"]; ?>" alt="Image A" class="image">

            <p class="textB"> <?php echo $data["TextB"]; ?></p>
            <img src="../image/<?php echo $data["ImageB"]; ?>" alt="Image B" class="image">

            <p class="textC"> <?php echo $data["TextC"]; ?></p>
            <img src="../image/<?php echo $data["ImageC"]; ?>" alt="Image C" class="image">
        </div>

        <!-- Partie 3 -->
        <div class="bulle" id="bulle3">
            <p class="right"><?php echo $data["Titre3"]; ?></p>
            
            <p class="texte3"><?php echo $data["Texte"]; ?></p>
        </div>
    </div>
        
</section>


    <!-- Footer -->
    <?php // include('includes/footer.php'); ?>
</body>
</html>
