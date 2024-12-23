
// Récupérer les éléments du DOM
const textColorInput = document.getElementById('CouleurText');

const fontSizeInput = document.getElementById('taille');
const fontSizeValue = document.getElementById('tailleValeur');

const textAlignInput = document.getElementById('AlignementText');

const fontStyleInput = document.getElementById('StylePolice');

const fontWeightInput = document.getElementById('PoidsPolice');

const modt = document.getElementById('modt');

// Fonction pour mettre à jour les styles du texte
function updateTextStyle() {

    // Mettre à jour la couleur du texte
    modt.style.color = textColorInput.value;

    // Mettre à jour la taille de la police
    modt.style.fontSize = fontSizeInput.value + 'px';
    fontSizeValue.textContent = fontSizeInput.value + 'px';

    // Mettre à jour l'alignement du texte
    modt.style.textAlign = textAlignInput.value;

    // Mettre à jour le style de la police
    modt.style.fontStyle = fontStyleInput.value;

    // Mettre à jour le poids de la police
    modt.style.fontWeight = fontWeightInput.value;
        }

// Ajouter des événements pour chaque contrôle
textColorInput.addEventListener('input', updateTextStyle);
fontSizeInput.addEventListener('input', updateTextStyle);
textAlignInput.addEventListener('change', updateTextStyle);
fontStyleInput.addEventListener('change', updateTextStyle);
fontWeightInput.addEventListener('change', updateTextStyle);

// Initialiser le style au chargement
updateTextStyle();