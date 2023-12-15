<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link für css am Ende einfügen -->
    <title> Notizenmanager</title>
</head>
	
<body>
	
	<h1> Notizenmanager </h1>
	<p>Mit diesem Notizmanager behältst du den Überblick über alle deine Module und deine Lernaktivitäten:</p>
<!-- Semester kann ausgewählt werden -->
<!-- 4. Semester entfällt, da es sich um das Praxissemester handelt -->
<div class="form-container">
    <div class="left-column">
        <label for="semester">Semester:</label>
        <select id="semester" onchange="updateCourses()">
            <option value="">Bitte wählen</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
        </select>

        <br>

        <!-- Kategorie kann ausgewählt werden -->
        <label for="category">Kategorie:</label>
        <select id="category" onchange="updateCourses()" disabled>
            <option value="" selected disabled>Bitte wählen</option>
            <option value="gestaltung">Gestaltung</option>
            <option value="technik">Technik</option>
            <option value="journalismus">Journalismus</option>
            <option value="wirtschaft">Wirtschaft</option> 
        </select>

        <br>

        <!-- Kurse werden dynamisch mit JavaScript hinzugefügt -->
        <label for="course">Kurs:</label>
        <select id="course" onchange="updateCourses()" disabled>
            <option value="" selected disabled>Bitte wählen</option>
        </select>
        <br>
		
	<button id="nextButton" onclick="showNotes()" disabled>Weiter</button>
        <button class="button" onclick="resetForm()">Zurücksetzen</button>
    </div>
	
		 <div id="notes-container">
			 <!-- class und style einfügen -->
        <label for="notes">Notizen:</label>
        <textarea id="notes"></textarea>
        <button class="button" onclick="saveNotes()">Notizen speichern</button>
    </div>
</div>
		
</body>
<script src="notizmanager.js"></script>
</html>