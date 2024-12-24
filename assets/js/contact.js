document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        const nom = document.getElementById('nom').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (!nom || !email || !message) {
            alert("Veuillez remplir tous les champs.");
            event.preventDefault();
        }
    });
});

const toggleButton = document.getElementById('toggle-dark-mode');
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        localStorage.setItem(
            'theme',
            document.body.classList.contains('dark-mode') ? 'dark' : 'light'
        );
    });

    // Charger le thème précédemment choisi
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }