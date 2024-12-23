
<section id="competences">
<h1 class="page-title">Mes Compétences</h1>
<?php
// Charger et analyser le fichier YAML
require_once("../yaml/yaml.php");
$competences = yaml_parse_file('data/competences.yaml'); // Assurez-vous que le chemin est correct

// Vérifier si le fichier YAML a bien été chargé
if ($competences === false) {
    die("Erreur de chargement du fichier YAML.");
}

// Fonction pour générer une barre de progression avec une couleur selon le niveau et ajouter une légende
function afficher_barre($niveau) {
    // Définir la couleur en fonction du niveau
    if ($niveau >= 80) {
        $color = "#4caf50"; // Vert pour les bons niveaux (80% et plus)
        $legende = "Avancé";
    } elseif ($niveau >= 60) {
        $color = "#ff9800"; // Orange pour les niveaux moyens (60% à 79%)
        $legende = "Intermédiaire";
    } else {
        $color = "#f44336"; // Rouge pour les niveaux faibles (moins de 60%)
        $legende = "Débutant";
    }
    
    // Retourne le HTML pour la barre de progression dans une barre de fond plus large avec une légende
    return "
        <div class='barre-fond'>
            <div class='barre' style='width: $niveau%; background-color: $color;'></div>
        </div>
        <p class='legende'>$legende</p>
    ";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Compétences</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #c4daee;
}

.competences {
    width: 90%;
    margin: 40px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Utilise une grille flexible */
    gap: 20px; /* Espacement entre les domaines */

}
.domaine:hover {
    transform: scale(1.05);
}
.domaine {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #c4daee;
    padding: 20px;
    border-radius: 15px;
    border-color:blue;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 100%;
    z-index: 20;
    transition: transform 0.2s;
}

.domaine h2 {
    font-size: 1.6rem;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.competence {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 30px;
    padding: 10px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%; /* S'assurer que les compétences prennent toute la largeur disponible */
}

.competence span {
    width: 200px;
    font-size: 1.2rem;
    color: #333;
    text-align: center;
    margin-bottom: 10px;
}
.titre-principal {
    text-align: center; /* Centre le titre horizontalement */
    font-size: 2.5rem; /* Taille du texte du titre */
    font-family: 'Arial', sans-serif; /* Police de caractères */
    color: #333; /* Couleur du texte */
    margin-top: 40px; /* Espacement au-dessus du titre */
    margin-bottom: 40px; /* Espacement en dessous du titre */
    font-weight: bold; /* Met le texte en gras */
}

.barre-fond {
    width: 100%;
    height: 30px;
    background-color: #e0e0e0;
    border-radius: 15px;
    margin-left: 0px;
    padding: 5px;
    display: flex;
    align-items: center;
}

.barre {
    height: 100%;
    border-radius: 10px;
    background: linear-gradient(to right, #ff6347, #00bcd4);
    background-size: 100% 100%;
    position: relative;
}

.pourcentage {
    position: absolute;
    right: 10px;
    font-size: 0.8rem;
    color: #333;
    font-weight: bold;
}

.legende {
    font-size: 1rem;
    color: #333;
    margin-top: 5px;
    text-align: center;
    font-weight: bold;
    width: 100%;
}

.competence h2 {
    font-size: 1.5rem;
    color: #333;
    margin: 0;
}

.competence p {
    font-size: 1rem;
    color: #666;
}


    </style>
</head>
<body>
<?php
// Exemple de données pour les compétences par domaine
$competences = [
    "Code" => [
        "HTML" => 80,
        "CSS" => 70,
        "JAVASCRIPT" => 60,
        "PHP" => 90,
    ],
    "Réseau" => [
        "ETUDE DE TRAM" => 50,
        "ADRESSEAGE IP" => 85,
        "SERVICE DHCP" => 75,
        "SERVICE DNS" => 80,
    ],
    "Bureautique" => [
        "Traitement de texte" => 90,
        "Excel" => 95,
        "Powerpoint" => 70,
        "Email" => 100,
    ]
];
?>

<div class="competences">
    <?php foreach ($competences as $domaine => $competenceList): ?>
        <div class="domaine">
            <h2><?php echo $domaine; ?></h2> <!-- Affichage du titre du domaine -->
            <?php foreach ($competenceList as $competence => $niveau): ?>
                <div class="competence">
                    <span><?php echo $competence; ?></span>
                    <div class="barre-fond">
                        <div class="barre" style="width: <?php echo $niveau; ?>%">
                            <div class="pourcentage"><?php echo $niveau; ?>%</div>
                        </div>
                    </div>
                    <div class="legende">Maîtrise de la compétence : <?php echo $niveau; ?>%</div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
            </section>
    
</body>
</html>
