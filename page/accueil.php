<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        /* Section présentation */


section#projets h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #444;
}

.acceuil {
    text-align: left;
    margin: 0 auto;
    max-width: 800px;
}

.acceuil img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 10px 0;
}

.acceuil p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin: 10px 0;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px 20px;
    background: #333;
    color: #fff;
    margin-top: 20px;
}



.Partie1{
    margin-right: 900px;
}
/* Conteneur pour les trois bulles horizontales */
.bulle-container {
    display: flex;
    justify-content: space-between;  /* Répartition égale de l'espace entre les bulles */
    gap: 20px;  /* Espacement entre les bulles */
    margin-bottom: 50px;  /* Espacement entre les bulles horizontales et la bulle centrale */
    flex-wrap: wrap;  /* Pour gérer la disposition sur différentes tailles d'écrans */
    justify-content: center;  /* Centrer les bulles horizontales sur la page */
}

/* Bulle rectangulaire */
.bulle {
    margin-top: 200px;
    background-color: #c4daee; /* Couleur de fond douce */
    border: 2px solid lightblue; /* Bordure colorée */
    border-radius: 15%; /* Coins légèrement arrondis */
    width: 400px; /* Largeur ajustée */
    height: 150px; /* Hauteur fixe */
    display: flex;
    justify-content: center; /* Centrer le texte à l'intérieur de la bulle */
    align-items: center;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre douce */
    color: rgb(0, 0, 0);
    font-size: 10pt;
}

/* Bulle centrée en dessous */
.bullehorizontale {
    background-color: #c4daee; /* Couleur de fond douce */
    border-radius: 8px; /* Coins arrondis */
    width: 600px; /* Largeur ajustée */
    height: auto; /* Hauteur automatique */
    display: flex;
    justify-content: center; /* Centrer horizontalement le texte */
    align-items: center;
    text-align: center;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre douce */
    color: rgb(0, 0, 0);
    font-size: 15pt;
    margin: 0 auto; /* Centrer la bulle */
    transition: transform 0.2s;

}
.bullehorizontale:hover {
    transform: scale(1.05);
}
/* Exemple de structure des sections de texte */
.bulle-centree p {
    font-size: 1.5rem;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: rgb(115, 115, 202);
}
.bulle:hover {
    transform: scale(1.05);
}
/* Styles pour les bulles (celles que tu as définies plus tôt) */
.bulle {
    
    background-color: #c4daee;
    border-radius: 8px;
    width: 400px;
    height: 450px; /* Hauteur fixe, ajuste selon le contenu */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; /* Change de space-between à flex-start pour que le contenu soit en haut de la bulle */
    text-align: center;
    padding: 20px; /* Ajuste le padding pour que le texte reste à l'intérieur */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
    word-wrap: break-word; /* Permet aux mots longs de se découper et éviter le débordement horizontal */
}


/* Autres styles pour l'image et le texte */
.bulle .pdp {
    width: 220px;
    height: 300px;
    border-radius: 20%;
    margin-bottom: 10px;
}

.bulle .mid,
.bulle .right {
    font-size: 3.3rem;
    font-weight: bolder;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-bottom: 40px;
    color: rgb(115, 115, 202);
}

/* Pour la section */

.pdp{
    width: 350px; /* Taille de l'image */
    height: 450px;
    border-radius: 20%; /* Images circulaires */
    margin-top: -20px;
}
.bulle .date{
    margin-top: 1px;
    font-size: 1.2rem;
}



.bulle .texte3{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 1.4rem;
    
}

.bulle .textA,
.bulle .textB,
.bulle .textC {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 1.2rem; /* Taille du texte ajustée */
    text-align: center; /* Texte centré */
    margin: 0  ; /* Espacement entre chaque texte */
}

.bulle .image {
    width: 55px;
    height: 55px;
    border-radius: 0%; /* Image carrée */
    margin: 10px 0; /* Espacement autour des images */
}



    </style>
</head>    
<section id="accueil">

    <?php
    require_once("../yaml/yaml.php");
    $data=yaml_parse_file("data/accueil.yaml");?>

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
        <div class="bullehorizontale" id="bulle4">
            <p class=""><?php echo $data["Acroche"]; ?></p>
            

        </div>
        </div>
        
</section>



    



