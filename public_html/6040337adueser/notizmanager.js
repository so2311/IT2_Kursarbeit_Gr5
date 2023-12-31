function updateCourses() {
    var semesterSelect = document.getElementById('semester');
    var categorySelect = document.getElementById('category');
    var courseSelect = document.getElementById('course');

    // Aktiviere die Kategorie- und Kursauswahl, wenn ein Semester ausgewählt ist
    categorySelect.disabled = false;
    courseSelect.disabled = false;

    // Setze die Kursauswahl zurück
    courseSelect.innerHTML = '<option value="" selected disabled>Bitte wählen</option>';

    // Welche Kurse für das ausgewählte Semester und die Kategorie verfügbar sind
    var selectedCategory = categorySelect.options[categorySelect.selectedIndex].text;
    var selectedSemester= semesterSelect.options[semesterSelect.selectedIndex].text;
    // Kurse basierend auf dem ausgewählten Semester und der Kategorie
    if (selectedSemester === 'Semester 1') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 1, Technik
            courseSelect.innerHTML = '<option value="grundlagen-it">Einführung in die Informatik</option>' +
                                     '<option value="mathematik">Mathematik</option>'
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 1, Gestaltung
            courseSelect.innerHTML = '<option value="grundlagen-gestaltung">Gestaltung, Grundlagen und Technik</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 1, Journalismus
            courseSelect.innerHTML = '<option value="journalistische-grundlagen-1">Journalistische Grundlagen 1</option>' +
                                     '<option value="psychologie">Psychologie</option>' +
                                     '<option value="wissenschaftliches-arbeiten-1">Wissenschaftliches Arbeiten 1</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 1, Wirtschaft
            courseSelect.innerHTML = '<option value="grundlagen-oekonomie">Grundlagen der Ökonomie</option>'
        }

    } else if (selectedSemester === 'Semester 2') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 2, Technik
            courseSelect.innerHTML = '<option value="it-1">IT 1</option>' 
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 2, Gestaltung
            courseSelect.innerHTML = '<option value="typografie-und-layout">Typografie und Layout</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 2, Journalismus
            courseSelect.innerHTML = '<option value="journalistische-grundlagen-2">Journalistische Grundlagen 2</option>' +
                                     '<option value="soziologie">Soziologie</option>' +
                                     '<option value="english-for-the-media">English for the Media</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 2, Wirtschaft
            courseSelect.innerHTML = '<option value="rechnungswesen">Rechnungswesen und Controlling</option>'
        }

    } else if (selectedSemester === 'Semester 3') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 3, Technik
            courseSelect.innerHTML = '<option value="it-2">IT 2</option>' +
                                     '<option value="statistik">Statistik</option>';
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 3, Gestaltung
            courseSelect.innerHTML = '<option value="visuelle-kommunikation-1">Visuelle Kommunikation 1</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 3, Journalismus
            courseSelect.innerHTML = '<option value="medien-und-kommunikation-1">Medien und Kommunikation 1</option>' +
                                     '<option value="spezieller-journalismus">Spezieller Journalismus</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 3, Wirtschaft
            courseSelect.innerHTML = '<option value="medienwirtschaft-und-marketing">Medienwirtschaft und Marketing</option>'
        }

    } else if (selectedSemester === 'Semester 5') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 5, Technik
            courseSelect.innerHTML = '<option value="medientechnik">Medientechnik</option>'
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 5, Gestaltung
            courseSelect.innerHTML = '<option value="visuelle-kommunikation-2">Visuelle Kommunikation 2</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 5, Journalismus
            courseSelect.innerHTML = '<option value="medien-und-kommunikation-2">Medien und Kommunikation 2</option>' +
                                     '<option value="medienprojekt-1">Medienprojekt 1</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 5, Wirtschaft
            courseSelect.innerHTML = '<option value="investition-und-finanzierung">Investition und Finanzierung</option>' +
									 '<option value="recht">Recht</option>';
        }

    } else if (selectedSemester === 'Semester 6') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 6, Technik
            courseSelect.innerHTML = '<option value="multimedia">Multimedia</option>'
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 6, Gestaltung
            courseSelect.innerHTML = '<option value="bitte-waehlen">Bitte wählen</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 6, Journalismus
            courseSelect.innerHTML = '<option value="schwerpunkt-1-journalismus">Schwerpunkt 1 Journalismus</option>' +
                                     '<option value="pr">PR und Unternehmenskommunikation</option>'+
									 '<option value="seminar-medienforschung">Seminar Medienforschung</option>'+
									 '<option value="medienprojekt-2">Medienprojekt 2</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 6, Wirtschaft
            courseSelect.innerHTML = '<option value="organisation-und-fuehrung">Organisation und Führung</option>' +
									 '<option value="schwerpunkt-1-wirtschaft">Schwerpunkt 1 Wirtschaft</option>';
        }

    } else if (selectedSemester === 'Semester 7') {
        if (selectedCategory === 'Technik') {
            // Kurse für Semester 7, Technik
            courseSelect.innerHTML = '<option value="bitte-waehlen">Bitte wählen</option>' 
        } else if (selectedCategory === 'Gestaltung') {
            // Kurse für Semester 7, Gestaltung
            courseSelect.innerHTML = '<option value="bitte-waehlen">Bitte wählen</option>' 
        } else if (selectedCategory === 'Journalismus') {
            // Kurse für Semester 7, Journalismus
            courseSelect.innerHTML = '<option value="schwerpunkt-2-journalismus">Schwerpunkt 2 Journalismus</option>' +
                                     '<option value="strategisches-medienmanagement">Strategisches Medienmanagement</option>' +
                                     '<option value="studienabschlussvorbereitung">Studienabschlussvorbereitung</option>';
        } else if (selectedCategory === 'Wirtschaft') {
            // Kurse für Semester 7, Wirtschaft
            courseSelect.innerHTML = '<option value="schwerpunkt-2-wirtschaft">Schwerpunkt 2 Wirtschaft</option>'+
									 '<option value="medienrecht">Medienrecht</option>';
        }

    } else {
        courseSelect.innerHTML = '<option value="" selected disabled>Bitte wählen</option>';
    }

    // Aktiviere das Kategorie-Dropdown, wenn ein Semester ausgewählt ist
    if (selectedSemester !== "") {
        categorySelect.disabled = false;
    } else {
        categorySelect.disabled = true;
    }

    // Aktiviere den "Weiter"-Button, wenn ein Kurs ausgewählt wurde
    var nextButton = document.getElementById('nextButton');
    nextButton.disabled = courseSelect.value === "";
}

// Initialisiere die Funktion, um den "Weiter"-Button-Status beim Laden der Seite zu setzen
updateCourses();

function showNotes() {
    var notesContainer = document.getElementById('notes-container');
    notesContainer.style.display = 'block';
}

function openNotes() {
    document.getElementById('notes-container').style.display = 'flex';
}

function saveNotes() {
    var selectedSemester = document.getElementById('semester').value;
    var selectedCategory = document.getElementById('category').value;
    var selectedCourse = document.getElementById('course').value;
    var notesContent = document.getElementById('notes').value;

    // Hier  Notizen in einer Datenbank speichern (serverseitige Logik erforderlich)
    // In diesem Beispiel wird die eingegebene Notiz in der Konsole ausgegeben
    console.log(`Notizen für Semester ${selectedSemester}, Kategorie ${selectedCategory}, Kurs ${selectedCourse}: ${notesContent}`);

    // Zurücksetzen des Formulars nach dem Speichern
    resetForm();
}

function resetForm() {
    document.getElementById('semester').value = '1';
    document.getElementById('category').value = '';
    document.getElementById('course').value = '';
    document.getElementById('category').disabled = true;

    // Verstecke das Notizen-Container-Div
    document.getElementById('notes-container').style.display = 'none';

    // Zurücksetzen des Notizentextfelds
    document.getElementById('notes').value = '';

    // Deaktiviere den "Weiter"-Button
    document.getElementById('nextButton').disabled = true;

    alert('Formular wurde zurückgesetzt');
}

// Aktiviere den "Weiter"-Button, wenn ein Kurs ausgewählt wurde
document.getElementById('course').addEventListener('change', function () {
    document.getElementById('nextButton').disabled = false;
});

