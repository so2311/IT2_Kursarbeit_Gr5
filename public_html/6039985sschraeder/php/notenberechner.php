<<<<<<< HEAD
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notenberechner</title>
	
</head>
	
	<!-- stylesheet verlinkung-->
	<link rel="stylesheet" href="notenberechnerstyle.css">
	
	<!-- javascript verlinkung-->
	<script src="notenberechnerjavascript.js"></script>
	

	<!-- Bootstrap Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- responsive Design mit bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	


<div class="container">
	
<header>
	
	<h1>Notenberechner</h1>
	
</header>
	
<nav>
	Navigation reinkopieren
	
	</nav>

	<main>
	

<body>
	
	<p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu berechnen. Wähle dafür einfach die passende Kategorie, das jeweilige Modul und deine Note in den Dropdownmenüs aus und klicke auf "Ausrechnen". </p>
	<br>
	
		
	<h2> Die Kategorien, die du eintragen kannst, sind: </h2>
		1. Gestaltung<br>
		2. Wirtschaft<br>
		3. Informatik<br>
		4. Journalismus<br>
		5. Recht<br>
	</p>
	
	<h2> Es gibt 34 Module im Studiengang Medienwirtschaft und Journalismus, in denen du eine Note bekommst: </h2>
		1. Grundlagen der Ökonomie <br>
	    2. Journalistische Grundlagen 1<br>
	    3. Psychologie<br>
	    4. Einführung in die Informatik<br>
	    5. Gestaltung: Grundlagen/Technik<br>
	    6. Mathematik<br>
	    7. Rechnungswesen und Controlling<br>
	    8. Journalistische Grundlagen 2<br>
	    9. Soziologie<br>
	    10. Internettechnologien 1<br>
	    11. Typographie/Layout<br>
	    12. English for the media<br>
	    13. Medienwirtschaft und Marketing<br>
	    14. Spezieller Journalismus<br>
	    15. Medien und Kommunikation 1<br>
	    16. Internettechnologien 2<br>
	    17. Visuelle Kommunikation 1<br>
	    18. Statistik<br>
	    19. Praxissemester Bericht<br>
	    20. Investition und Finanzierung<br>
	    21. Medien und Kommunikation 2<br>
	    22. Medientechnik<br>
	    23. Visuelle Kommunikation 2<br>
	    24. Recht<br>
	    25. Medienprojekt 1<br>
	    26. Organisation und Führung<br>
	    27. Schwerpunkt 1<br>
	    28. PR und Unternehmenskommunikation<br>
	    29. Multimedia<br>
	    30. Seminar Medienforschung<br>
	    31. Medienprojekt 2<br>
	    32. Strategisches Medienmanagement<br>
	    33. Schwerpunkt 2<br>
		34. Medienrecht<br>
	</p>
	
	
	<br>
	
<form action="verarbeitung.php" method="POST">
		
<label for="kategorie">Kategorie:</label>
<input type="text"  name="kategorie" required>
	
	  <br>
	  
<label for="modul">Modul:</label>
<input type="text" name="modul" required>
	  <br>
	  
<label for="note">Note:</label>
<input type="text" id="note">
	  <br>
	 
	
	  <!---Bootstrap Button Ausrechnen--->
<button type="submit" name="ausrechnen" class="btn btn-danger">Ausrechnen</button>
	
	</form>
	

		<br>
		<br>
<p> Klicke auf "Ergebnisse", um deine Noten in einer Übersicht zu sehen. Du siehst dort außerdem in einer Statistik, wie oft du welche Note bekommen hast. </p>
		
		 <!---Bootstrap Button Ergebnisse der zu den Auswertungen führt--->
<p><a href="ergebnisse.php" class="btn btn-danger">Ergebnisse</a></p>

	</main>
	
	
	
	<side>
	
	<p>Ausgabe Noten</p>
	
	</side>
	
	
	</div>
</body>
=======
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notenberechner</title>
	
</head>
	
	<!-- stylesheet verlinkung-->
	<link rel="stylesheet" href="notenberechnerstyle.css">
	
	<!-- javascript verlinkung-->
	<script src="notenberechnerjavascript.js"></script>
	

	<!-- Bootstrap Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- responsive Design mit bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	


<div class="container">
	
<header>
	
	<h1>Notenberechner</h1>
	
</header>
	
<nav>
	Navigation reinkopieren
	
	</nav>

	<main>
	

<body>
	
	<p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu berechnen. Wähle dafür einfach die passende Kategorie, das jeweilige Modul und deine Note in den Dropdownmenüs aus und klicke auf "Ausrechnen". </p>
	<br>
	
		
	<h2> Die Kategorien, die du eintragen kannst, sind: </h2>
		1. Gestaltung<br>
		2. Wirtschaft<br>
		3. Informatik<br>
		4. Journalismus<br>
		5. Recht<br>
	</p>
	
	<h2> Es gibt 34 Module im Studiengang Medienwirtschaft und Journalismus, in denen du eine Note bekommst: </h2>
		1. Grundlagen der Ökonomie <br>
	    2. Journalistische Grundlagen 1<br>
	    3. Psychologie<br>
	    4. Einführung in die Informatik<br>
	    5. Gestaltung: Grundlagen/Technik<br>
	    6. Mathematik<br>
	    7. Rechnungswesen und Controlling<br>
	    8. Journalistische Grundlagen 2<br>
	    9. Soziologie<br>
	    10. Internettechnologien 1<br>
	    11. Typographie/Layout<br>
	    12. English for the media<br>
	    13. Medienwirtschaft und Marketing<br>
	    14. Spezieller Journalismus<br>
	    15. Medien und Kommunikation 1<br>
	    16. Internettechnologien 2<br>
	    17. Visuelle Kommunikation 1<br>
	    18. Statistik<br>
	    19. Praxissemester Bericht<br>
	    20. Investition und Finanzierung<br>
	    21. Medien und Kommunikation 2<br>
	    22. Medientechnik<br>
	    23. Visuelle Kommunikation 2<br>
	    24. Recht<br>
	    25. Medienprojekt 1<br>
	    26. Organisation und Führung<br>
	    27. Schwerpunkt 1<br>
	    28. PR und Unternehmenskommunikation<br>
	    29. Multimedia<br>
	    30. Seminar Medienforschung<br>
	    31. Medienprojekt 2<br>
	    32. Strategisches Medienmanagement<br>
	    33. Schwerpunkt 2<br>
		34. Medienrecht<br>
	</p>
	
	
	<br>
	
<form action="verarbeitung.php" method="POST">
		
<label for="kategorie">Kategorie:</label>
<input type="text"  name="kategorie" required>
	
	  <br>
	  
<label for="modul">Modul:</label>
<input type="text" name="modul" required>
	  <br>
	  
<label for="note">Note:</label>
<input type="text" id="note">
	  <br>
	 
	
	  <!---Bootstrap Button Ausrechnen--->
<button type="submit" name="ausrechnen" class="btn btn-danger">Ausrechnen</button>
	
	</form>
	

		<br>
		<br>
<p> Klicke auf "Ergebnisse", um deine Noten in einer Übersicht zu sehen. Du siehst dort außerdem in einer Statistik, wie oft du welche Note bekommen hast. </p>
		
		 <!---Bootstrap Button Ergebnisse der zu den Auswertungen führt--->
<p><a href="ergebnisse.php" class="btn btn-danger">Ergebnisse</a></p>

	</main>
	
	
	
	<side>
	
	<p>Ausgabe Noten</p>
	
	</side>
	
	
	</div>
</body>
>>>>>>> 4867574ebb1c093413f7eff94f2bbbb47c5a6f82
</html>