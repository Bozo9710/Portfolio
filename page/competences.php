<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio LOTHAIRE</title>
    <link rel="stylesheet" href="./../css/competences.css">
</head>

    
<body>
    <!-- En-tête avec navigation -->

    
    
    <?php
    require_once("yaml/yaml.php");
    $data=yaml_parse_file('data/competences.yaml');?>

    <!-- Section présentation de tes projets -->
    <section id="projets">
    
    <div class="bulle-container">
        <!-- Partie 1 -->
        <div class="bulle" id="bulle1">
            <h2><?php echo $data[""] . " " . $data[""]; ?></h2>
            <img src="../image/<?php echo $data[""]; ?>" alt="Photo de profil" class="pdp">
            <p class="date"><?php echo $data[""]; ?></p>
        </div>
        <!-- Partie 2 -->
        <div class="bulle" id="bulle2">
            <p class="mid"><?php echo $data[""]; ?></p>

            <p class="textA"><?php echo $data[""]; ?></p>

            <img src="../image/<?php echo $data[""]; ?>" alt="Image A" class="image">

            <p class="textB"> <?php echo $data[""]; ?></p>
            <img src="../image/<?php echo $data[""]; ?>" alt="Image B" class="image">

            <p class="textC"> <?php echo $data[""]; ?></p>
            <img src="../image/<?php echo $data[""]; ?>" alt="Image C" class="image">
        </div>

        <!-- Partie 3 -->
        <div class="bulle" id="bulle3">
            <p class="right"><?php echo $data[""]; ?></p>
            
            <p class="texte3"><?php echo $data[""]; ?></p>
        </div>
    </div>
        
</section>


    <!-- Footer -->
    <?php // include('includes/footer.php'); ?>
</body>
</html>
