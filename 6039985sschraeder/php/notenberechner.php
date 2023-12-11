<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notenberechner</title>
	
</head>
	
	<!-- stylesheet verbindung-->
	<link rel="stylesheet" href="file:///C|/Users/selin/OneDrive/Dokumente/Studium Jade Hs/Semester 7/IT2/repositories/IT2_Kursarbeit_Gr5/6039985sschraeder/css/notenberechnerstyle.css">
	
	<script src="file:///C|/Users/selin/OneDrive/Dokumente/Studium Jade Hs/Semester 7/IT2/repositories/IT2_Kursarbeit_Gr5/6039985sschraeder/javascript/notenberechnerjavascript.js"></script>
	
	<!-- Bootstrap Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
	<!-- Bootstrap Einbindung CSS, Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	<!-- responsive Design mit bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
		
<h1>Notenberechner</h1>
	
	<p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu berechnen:</p>
	<p>
  <label for="kategorie">Kategorie:</label>
	  <select name="kategorie" required>
	    <option value="kategorie1">Gestaltung</option>
	    <option value="kategorie2">Wirtschaft</option>
	    <option value="kategorie3">Informatik</option>
	    <option value="kategorie4">Journalismus</option>
	    <option value="kategorie4">Recht</option>
      </select>
	  <br>
	  
	  <label for="modul">Modul:</label>
	  <select name="modul" required>
	    <option value="modul1">Modul 1</option>
	    <option value="modul2">Modul 2</option>
	    <option value="modul3">Modul 3</option>
	    <option value="modul4">Modul 4</option>
	    <option value="modul5">Modul 1</option>
	    <option value="modul6">Modul 2</option>
	    <option value="modul7">Modul 1</option>
	    <option value="modul8">Modul 2</option>
	    <option value="modul9">Modul 1</option>
	    <option value="modul10">Modul 2</option>
	    <option value="modul11">Modul 1</option>
	    <option value="modul12">Modul 2</option>
	    <option value="modul13">Modul 1</option>
	    <option value="modul14">Modul 2</option>
	    <option value="modul15">Modul 1</option>
	    <option value="modul16">Modul 2</option>
	    <option value="modul17">Modul 1</option>
	    <option value="modul18">Modul 2</option>
	    <option value="modul19">Modul 1</option>
	    <option value="modul20">Modul 2</option>
	    <option value="modul21">Modul 1</option>
	    <option value="modul22">Modul 2</option>
	    <option value="modul23">Modul 1</option>
	    <option value="modul24">Modul 2</option>
	    <option value="modul25">Modul 1</option>
	    <option value="modul26">Modul 2</option>
	    <option value="modul27">Modul 1</option>
	    <option value="modul28">Modul 2</option>
	    <option value="modul29">Modul 1</option>
	    <option value="modul30">Modul 2</option>
	    <option value="modul31">Modul 1</option>
	    <option value="modul32">Modul 2</option>
	    <option value="modul33">Modul 1</option>
	    <option value="modul34">Modul 2</option>
      </select>
	  <br>
	  
	  <label for="note">Note:</label>
	  <select name="note" id="note">
	    <option value="1.0">1,0</option>
	    <option value="1.3">1,3</option>
	    <option value="1.7">1,7</option>
	    <option value="2.0">2,0</option>
	    <option value="2.3">2,3</option>
	    <option value="2.7">2,7</option>
	    <option value="3.0">3,0</option>
	    <option value="3.3">3,3</option>
	    <option value="3.7">3,7</option>
	    <option value="4.0">4,0</option>
	    <option value="5.0">5,0</option>
	    </select>
	  <br>
	  
	  <!---Bootstrap Button---></p>
<button type="submit" class="btn btn-danger">Ausrechnen</button>
<p>&nbsp;</p>
<p><a href="file:///C|/Users/selin/OneDrive/Dokumente/Studium Jade Hs/Semester 7/IT2/repositories/IT2_Kursarbeit_Gr5/6039985sschraeder/php/auswertungen.php" class="btn btn-danger">Ergebnisse</a></p>

		<?php


// Verbindung zur MySQL-Datenbank herstellen
    //mysqli_connect ("DB-Server (Domainname)", "Benutzername (Login)", "Kennwort", "Datenbank")
    $con= mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");
	
		
// Daten aus dem Formular holen
$kategorie = $_POST["kategorie"];
$modul = $_POST["modul"];
$note = $_POST["note"];
		
		
// SQL-INSERT-Befehl ausführen
$sql = "INSERT INTO Kategorie (kategorie) VALUES ('$kategorie')";

// Verbindung zur Datenbank schließen
$conn->close();
?>
	
</body>
</html>