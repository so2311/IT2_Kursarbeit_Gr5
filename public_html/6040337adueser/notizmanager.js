function updateCourses() {
    var semesterSelect = document.getElementById('semester');
    var categorySelect = document.getElementById('category');
    var courseSelect = document.getElementById('course');

    // Aktiviere die Kategorie- und Kursauswahl, wenn ein Semester ausgewählt ist
    categorySelect.disabled = false;
    courseSelect.disabled = false;

    // Setze die Kursauswahl zurück
    courseSelect.innerHTML = '<option value="" selected disabled>Bitte wählen</option>';
	