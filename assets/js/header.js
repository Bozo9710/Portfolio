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
    