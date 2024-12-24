<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations</title>
    <link rel="stylesheet" href="assets/css/footer.css">
</head> 
<script>
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
</script>

<footer id="footer">
    <div class="footer-content">
        <p>&copy; 2024 Lothaire Quintard. Tous droits réservés.</p>
        <ul class="social-links">
            <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/Bozo9710" target="_blank">GitHub</a></li>
        </ul>
    </div>
</footer>

<style>
/* Styles du footer */

</style>
