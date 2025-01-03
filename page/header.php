<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="assets/css/header.css">

    
</head>
<body>
<header>
        <nav>
            
                <a href="#accueil">Accueil</a>
                <a href="#competences">Compétences</a>
                <a href="#realisations">Réalisations</a>
                <a href="#formations">Formations</a>
                <a href="#contact">Contact</a>
                <button id="darkModeToggle">
                    <span id="moonIcon">🌙</span> <!-- Emoji de la lune -->
                    <span id="sunIcon" style="display: none;">🌞</span> <!-- Emoji du soleil (initialement masqué) -->
                </button>


        </nav>
    </header>
    <script>

            // Sélection des éléments du DOM
    const darkModeToggle = document.getElementById("darkModeToggle");
    const moonIcon = document.getElementById("moonIcon");
    const sunIcon = document.getElementById("sunIcon");
    
    // Fonction pour activer/désactiver le mode sombre
    darkModeToggle.addEventListener("click", () => {
        const isDarkMode = document.body.classList.toggle("dark-mode");
    
        if (isDarkMode) {
            // Mode sombre activé
            localStorage.setItem("darkMode", "enabled");
            sunIcon.style.display = "inline-block"; // Affiche l'icône du soleil
            moonIcon.style.display = "none"; // Cache l'icône de la lune
            darkModeToggle.textContent = "🌞"; // Change le texte du bouton
        } else {
            // Mode sombre désactivé
            localStorage.setItem("darkMode", "disabled");
            sunIcon.style.display = "none"; // Cache l'icône du soleil
            moonIcon.style.display = "inline-block"; // Affiche l'icône de la lune
            darkModeToggle.textContent = "🌙"; // Texte initial
        }
    });
    
    </script>
