const taskList = document.getElementById('task-list');

        // Ajouter une nouvelle tâche
        function addTask() {
            const taskInput = document.getElementById('new-task');
            const taskText = taskInput.value.trim();
            if (taskText === '') {
                alert('Veuillez entrer une tâche.');
                return;
            }

            const li = document.createElement('li');
            li.className = 'task-item';
            li.innerHTML = `
                <span onclick="toggleComplete(this)">${taskText}</span>
                <button onclick="editTask(this)">Modifier</button>
            `;
            taskList.appendChild(li);

            taskInput.value = '';
        }

        // Marquer une tâche comme terminée ou non
        function toggleComplete(taskElement) {
            const li = taskElement.parentElement;
            li.classList.toggle('completed');
        }

        // Modifier une tâche existante
        function editTask(button) {
            const li = button.parentElement;
            const taskText = prompt('Modifier la tâche:', li.textContent.trim());
            if (taskText !== null) {
                li.querySelector('span').textContent = taskText;
            }
        }

        // Supprimer les tâches terminées
        function deleteCompleted() {
            const completedTasks = document.querySelectorAll('.task-item.completed');
            completedTasks.forEach(task => task.remove());
        }

        // Sauvegarder les tâches dans le localStorage
        function saveTasks() {
            const saveName = document.getElementById('save-name').value.trim();
            if (saveName === '') {
                alert('Veuillez entrer un nom pour la sauvegarde.');
                return;
            }

            const tasks = [];
            document.querySelectorAll('.task-item').forEach(task => {
                tasks.push({
                    text: task.querySelector('span').textContent,
                    completed: task.classList.contains('completed')
                });
            });

            localStorage.setItem(saveName, JSON.stringify(tasks));
            alert('Liste sauvegardée sous le nom: ' + saveName);
        }

        // Recharger une liste de tâches sauvegardée
        function loadTasks() {
            const saveName = document.getElementById('save-name').value.trim();
            if (saveName === '') {
                alert('Veuillez entrer un nom de sauvegarde.');
                return;
            }

            const savedTasks = localStorage.getItem(saveName);
            if (!savedTasks) {
                alert('Aucune liste trouvée sous ce nom.');
                return;
            }

            const tasks = JSON.parse(savedTasks);
            taskList.innerHTML = '';
            tasks.forEach(task => {
                const li = document.createElement('li');
                li.className = 'task-item' + (task.completed ? ' completed' : '');
                li.innerHTML = `
                    <span onclick="toggleComplete(this)">${task.text}</span>
                    <button onclick="editTask(this)">Modifier</button>
                `;
                taskList.appendChild(li);
            });

            alert('Liste rechargée avec succès.');
        }