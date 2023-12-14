function updateCourses() {
    var semesterSelect = document.getElementById('semester');
    var categorySelect = document.getElementById('category');
    var courseSelect = document.getElementById('course');

    // Aktiviere die Kategorie- und Kursauswahl, wenn ein Semester ausgewählt ist
    categorySelect.disabled = false;
    courseSelect.disabled = false;

    // Setze die Kursauswahl zurück
    courseSelect.innerHTML = '<option value="" selected disabled>Bitte wählen</option>';
	
	// Welche Kurse für welches Semester
    var selectedSemester = semesterSelect.value;
    var selectedCategory = categorySelect.value;

    // Kurse basierend auf dem ausgewählten Semester und der Kategorie
    if (selectedSemester === '1') {
        if (selectedCategory === 'technik') {
            // Kurse für Semester 1, Technik
            courseSelect.innerHTML = '<option value="grundlagen-it">Einführung in die Informatik</option>' +
                                     '<option value="mathematik">Mathematik</option>'
        } else if (selectedCategory === 'gestaltung') {
            // Kurse für Semester 1, Gestaltung
            courseSelect.innerHTML = '<option value="grundlagen-gestaltung">Gestaltung, Grundlagen und Technik</option>' 
        } else if (selectedCategory === 'journalismus') {
            // Kurse für Semester 1, Journalismus
            courseSelect.innerHTML = '<option value="journalistische-grundlagen-1">Journalistische Grundlagen 1</option>' +
                                     '<option value="psychologie">Psychologie</option>' +
                                     '<option value="wissenschaftliches-arbeiten-1">Wissenschaftliches Arbeiten 1</option>';
        } else if (selectedCategory === 'wirtschaft') {
            // Kurse für Semester 1, Wirtschaft
            courseSelect.innerHTML = '<option value="grundlagen-oekonomie">Grundlagen der Ökonomie</option>'
        }
		
	  } else if (selectedSemester === '2') {
        if (selectedCategory === 'technik') {
            // Kurse für Semester 2, Technik
            courseSelect.innerHTML = '<option value="it-1">IT 1</option>' 
        } else if (selectedCategory === 'gestaltung') {
            // Kurse für Semester 2, Gestaltung
            courseSelect.innerHTML = '<option value="typografie-und-layout">Typografie und Layout</option>' 
        } else if (selectedCategory === 'journalismus') {
            // Kurse für Semester 2, Journalismus
            courseSelect.innerHTML = '<option value="journalistische-grundlagen-2">Journalistische Grundlagen 2</option>' +
                                     '<option value="soziologie">Soziologie</option>' +
                                     '<option value="english-for-the-media">English for the Media</option>';
        } else if (selectedCategory === 'wirtschaft') {
            // Kurse für Semester 2, Wirtschaft
            courseSelect.innerHTML = '<option value="rechnungswesen-und-controlling">Rechnungswesen und Controlling</option>'
        }
		  		
	  } else if (selectedSemester === '3') {
        if (selectedCategory === 'technik') {
            // Kurse für Semester 3, Technik
            courseSelect.innerHTML = '<option value="it-2">IT 2</option>' 
									 '<option value="statistik">Statistik</option>'
        } else if (selectedCategory === 'gestaltung') {
            // Kurse für Semester 3, Gestaltung
            courseSelect.innerHTML = '<option value="visuelle-kommunikation-1">Visuelle Kommunikation 1</option>' 
        } else if (selectedCategory === 'journalismus') {
            // Kurse für Semester 3, Journalismus
            courseSelect.innerHTML = '<option value="spezieller-journalismus">Spezieller Journalismus</option>' +
                                     '<option value="medien-und-kommunikation-1">Medien und Kommunikation 1</option>'; +
       } else if (selectedCategory === 'wirtschaft') {
            // Kurse für Semester 3, Wirtschaft
            courseSelect.innerHTML = '<option value="medienwirtschaft-und-marketing">Medienwirtschaft und Marketing</option>'
        }  
			
			
	} else if (selectedSemester === '5') {
		
		
		
		
		
		
		
				 
		
		
		
		
		
		
		
		
		
	} else if (selectedSemester === '6') {
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	} else if (selectedSemester === '7') {
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
