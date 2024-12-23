let ecran = document.getElementById('ecran');

        function ajouterValeur(valeur) {
            if (ecran.value === '0') {
                ecran.value = valeur;
            } else {
                ecran.value += valeur;
            }
        }

        function calculer() {
            try {
                ecran.value = eval(ecran.value);
            } catch (e) {
                ecran.value = 'Erreur';
            }
        }

        function effacer() {
            ecran.value = '';
        }