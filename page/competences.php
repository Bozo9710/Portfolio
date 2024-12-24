<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Compétences</title>
    <link rel="stylesheet" href="assets/css/competences.css">
</head>
<section id="competences">
<h1 class="page-title">Mes Compétences</h1>
<script src="./../assets/js/competences.js"></script>
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

