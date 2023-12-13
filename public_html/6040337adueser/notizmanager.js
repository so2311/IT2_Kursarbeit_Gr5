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
	