<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations</title>
    <link rel="stylesheet" href="assets/css/realisations.css">
</head>  
<script src="./../assets/js/realisations.js"></script>

<?php
require_once("./yaml/yaml.php");
$data = yaml_parse_file("data/realisations.yaml");

// Convertir les données YAML en un tableau PHP
$realisations = [
    [
        'titre' => $data['realisation1_titre'],
        'description' => $data['realisation1_description'],
        'technologies' => explode(', ', $data['realisation1_technologies']),
        'lien' => $data['realisation1_lien']
    ],
    [
        'titre' => $data['realisation2_titre'],
        'description' => $data['realisation2_description'],
        'technologies' => explode(', ', $data['realisation2_technologies']),
        'lien' => $data['realisation2_lien']
    ]
];
?>

<section id="realisations">
    <div class="container">
        <h1 class="page-title">Mes Réalisations</h1>

        <!-- Section Réalisations -->
        <div class="realisation-list">
            <?php foreach ($realisations as $realisation): ?>
                <div class="realisation">
                    <h2><?= htmlspecialchars($realisation['titre']) ?></h2>
                    <p><?= htmlspecialchars($realisation['description']) ?></p>
                    <p><strong>Technologies :</strong> <?= implode(', ', $realisation['technologies']) ?></p>
                    <a href="#" class="btn" onclick="window.open('<?= htmlspecialchars($realisation['lien']) ?>', '_blank'); return false;">Voir le projet</a>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>