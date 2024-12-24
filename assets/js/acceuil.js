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