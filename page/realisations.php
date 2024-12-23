<?php
require_once("../yaml/yaml.php");
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

<style>
    /* Styles de la page des réalisations */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    .page-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #333;
    }

    /* Section des réalisations */
    .realisation-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .realisation {
        background: #c4daee;
        border: 1px solid #ddd;
        border-radius: 8px;
        width: 300px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .realisation:hover {
        transform: scale(1.05);
    }

    .realisation img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .realisation h2 {
        font-size: 1.5rem;
        color: #444;
        margin-bottom: 10px;
    }

    .realisation p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 10px;
    }

    /* Style du bouton */
    .btn {
        display: inline-block;
        padding: 10px 15px;
        background: linear-gradient(to right, #ff6347, #00bcd4); 
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        transition: background 0.3s ease;
    }

    .btn:hover {
        background:linear-gradient(to left, #ff6347, #00bcd4);
    }
</style>

<script>
    // Aucun script spécifique nécessaire pour ce bouton
</script>
