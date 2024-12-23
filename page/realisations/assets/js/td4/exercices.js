    // Exercice 1: Changer la couleur de fond
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
    function changeBackgroundColor() {
        document.body.style.backgroundColor = getRandomColor();
      }
  
      // Exercice 2: Ajouter un élément à la liste
      function addToList() {
        let itemText = document.getElementById("newItem").value;
        if(itemText) {
          let listItem = document.createElement("li");
          listItem.textContent = itemText;
          document.getElementById("list").appendChild(listItem);
          document.getElementById("newItem").value = ''; // Clear input field
        }
      }
  
      // Exercice 3: Calculer la somme
      function calculateSum() {
        let num1 = parseFloat(document.getElementById("num1").value);
        let num2 = parseFloat(document.getElementById("num2").value);
        let sum = num1 + num2;
        document.getElementById("result").textContent = "La somme est : " + sum;
      }
  
      // Exercice 4: Changer l'image
      function changeImage() {
        // Récupère la valeur sélectionnée dans le menu déroulant
        var selectedImage = document.getElementById('imageSelect').value;

        // Met à jour la source de l'image affichée
        document.getElementById('imageDisplay').src = './../../assets/image/' + selectedImage;
    }
  
      // Exercice 5: Afficher une alerte
      function showAlert() {
        alert("Vous avez survolé l'élément !");
      }
  
      // Exercice 6: Horloge numérique
      function updateClock() {
        let now = new Date();
        let hours = now.getHours().toString().padStart(2, '0');
        let minutes = now.getMinutes().toString().padStart(2, '0');
        let seconds = now.getSeconds().toString().padStart(2, '0');
        document.getElementById("clock").textContent = `${hours}:${minutes}:${seconds}`;
      }
  
      setInterval(updateClock, 1000);
  
      // Exercice 7: Supprimer l'élément
      function deleteElement() {
        let confirmation = confirm("Voulez-vous vraiment supprimer cet élément ?");
        if (confirmation) {
          document.getElementById("elementToDelete").remove();
        }
      }
  
      // Exercice 8: Cacher ou afficher l'élément
      function toggleVisibility() {
        let element = document.getElementById("toggleElement");
        let checkbox = document.getElementById("toggleCheckbox");
        element.style.display = checkbox.checked ? "block" : "none";
      }
  
      // Exercice 9: Formulaire de contact
      function submitForm(event) {
        event.preventDefault();
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let message = document.getElementById("message").value;
        console.log(`Nom: ${name}, Email: ${email}, Message: ${message}`);
      }