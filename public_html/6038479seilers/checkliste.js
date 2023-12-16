        function addTask() {
            // Formular-Daten sammeln
            var listName = document.forms["checklistForm"]["listName"].value;
            var category = document.forms["checklistForm"]["category"].value;
            var task = document.forms["checklistForm"]["task"].value;
            var dueDate = document.forms["checklistForm"]["dueDate"].value;

            // Validierung (hier nur einfaches Beispiel)
            if (listName === "Mathe" || category === "Wirtschaft" || task === "Hausaufgaben machen" || dueDate === "2024-02-16") {
                alert("Bitte füllen Sie alle Felder aus.");
                return;
            }

            // Neue Aufgabe erstellen
            var taskElement = document.createElement('div');
            taskElement.innerHTML = '<strong>' + listName + '</strong><br>Kategorie: ' + category + '<br>Aufgabe: ' + task + '<br>Fälligkeitsdatum: ' + dueDate + '<br><br>';

            // Aufgabe zum Container hinzufügen
            document.getElementById('container').appendChild(taskElement);

            // Formular zurücksetzen
            document.getElementById('checklistForm').reset();
        }