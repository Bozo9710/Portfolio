<section id="accueil">
    <?php
    require_once("yaml/yaml.php");
    $data=yaml_parse_file('data/accueil.yaml');?>

    <!-- Section présentation de tes projets -->
    
    
        <div class="bulle-container">
        <!-- Partie 1 -->
        <div class="bulle" id="bulle1">
            <h2><?php echo $data["Prenom"] . " " . $data["Nom"]; ?></h2>    
            <img src="image/<?php echo $data["PDP"]; ?>" alt="Photo de profil" class="pdp">
            <p class="date"><?php echo $data["Date"]; ?></p>
        </div>
        <!-- Partie 2 -->
        <div class="bulle" id="bulle2">
            <h2><?php echo $data["Titre2"]; ?></h2>

            <p class="textA"><?php echo $data["TextA"]; ?></p>

            <img src="image/<?php echo $data["ImageA"]; ?>" alt="Image A" class="image">

            <p class="textB"> <?php echo $data["TextB"]; ?></p>
            <img src="image/<?php echo $data["ImageB"]; ?>" alt="Image B" class="image">

            <p class="textC"> <?php echo $data["TextC"]; ?></p>
            <img src="image/<?php echo $data["ImageC"]; ?>" alt="Image C" class="image">
        </div>

        <!-- Partie 3 -->
        <div class="bulle" id="bulle3">
            <h2><?php echo $data["Titre3"]; ?></h2>
            
            <p class="texte3"><?php echo $data["Texte"]; ?></p>
        </div>
        <div class="bulle-horizontale" id="bulle4">
            <p class=""><?php echo $data["Acroche"]; ?></p>
            

        </div>
        </div>
        
</section>


    <!-- page2  -->
    



