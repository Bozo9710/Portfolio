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
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    h1 {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #333;
    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
        font-size: 1.8rem;
        color: #333;
    }

    #formations ul {
        list-style: none;
        padding: 0;
        max-width: 800px;
        margin: 20px auto;
        transition: transform 0.2s;

    }

    #formations li {
        background: #c4daee;
        margin: 10px 0;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: transform 0.2s;

    }
    #formations li:hover{
        transform: scale(1.05);
        
    }

    /* Bouton pour voir l'établissement */
    .btn-voir-etablissement {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background:linear-gradient(to right, #ff6347, #00bcd4); 
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease;
        width: fit-content;
    }

    .btn-voir-etablissement:hover {
        background:linear-gradient(to left, #ff6347, #00bcd4);
        transform: scale(1.05);

    }

    #cv .btn {
        display: flex;
        margin: 20px auto;
        padding: 10px 20px;
        background:linear-gradient(to right, #ff6347, #00bcd4);
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease;
        width: fit-content;
        justify-content: center; /* Centre horizontalement */

    }

    #cv .btn:hover {
        background:linear-gradient(to left, #ff6347, #00bcd4);
        transform: scale(1.05);
    }

</style>

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
