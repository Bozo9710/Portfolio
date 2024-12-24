<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations</title>
    <link rel="stylesheet" href="assets/css/formations.css">
</head> 
<script src="./../assets/js/formations.js"></script>

<?php
// Chargement du fichier YAML
$data = yaml_parse_file('data/formations.yaml');
if (!$data) {
    die("Erreur : Impossible de charger le fichier YAML.");
}
// Extraction des formations à partir des clés dynamiques
$formations = [];
$i = 1;
while (isset($data["formation{$i}_titre"])) {
    $formations[] = [
        'titre' => $data["formation{$i}_titre"],
        'description' => $data["formation{$i}_description"],
        'annee' => $data["formation{$i}_annee"],
        'lien' => $data["formation{$i}_lien"]
    ];
    $i++;
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.querySelector('.btn');

        // Animation au survol du bouton
        btn.addEventListener('mouseenter', function() {
            btn.style.transform = 'scale(1.1)';
            btn.style.transition = 'transform 0.3s ease';
        });

        btn.addEventListener('mouseleave', function() {
            btn.style.transform = 'scale(1)';
        });

        // Scroll animé vers la section CV lors du clic sur le bouton
        btn.addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut (pour le téléchargement)
            
            // Scroll jusqu'à la section #cv avec une animation
            document.querySelector('#cv').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
</script>

<section id="formations">
    <h1>Mes Formations</h1>
    <ul>
        <?php foreach ($formations as $formation): ?>
            <li>
                <h3><?= htmlspecialchars($formation['titre'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?= htmlspecialchars($formation['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                <span><strong>Année :</strong> <?= htmlspecialchars($formation['annee'], ENT_QUOTES, 'UTF-8'); ?></span>
                <br>
                <a href="<?= htmlspecialchars($formation['lien'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-voir-etablissement" target="_blank">Voir l'établissement</a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<section id="cv">
    <h2>Téléchargez mon CV</h2>
    <a href="http://127.0.0.1/Portfolio/page/formations/Lothaire_Quintard_CV.pdf" class="btn" download="Lothaire_Quintard_CV.pdf">Télécharger le CV</a>
</section>



</body>
</html>
