const toggleButton = document.getElementById('toggle-dark-mode');
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        // Enregistrez le choix dans le localStorage pour le conserver après rechargement
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // Appliquer le mode nuit si enregistré dans localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }