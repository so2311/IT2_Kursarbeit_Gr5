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
	
	<!-- db.connect.php include datei verlinkung-->
	<?php
	include 'dbconnect.php'
	?>
	
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
	Navigation
	
	</nav>

	<main>
	

<body>
	
	<p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu berechnen. Wähle dafür einfach die passende Kategorie, das jeweilige Modul und deine Note in den Dropdownmenüs aus und klicke auf "Ausrechnen". </p>
	<br>
		
  <label for="kategorie">Kategorie:</label>
	  <select name="kategorie" required>
	    <option value="kategorie1">Gestaltung</option>
	    <option value="kategorie2">Wirtschaft</option>
	    <option value="kategorie3">Informatik</option>
	    <option value="kategorie4">Journalismus</option>
	    <option value="kategorie5">Recht</option>
      </select>
	  <br>
	  
	  <label for="modul">Modul:</label>
	  <select name="modul" required>
	    <option value="modul1">Grundlagen der Ökonomie</option>
	    <option value="modul2">Journalistische Grundlagen 1</option>
	    <option value="modul3">Psychologie</option>
	    <option value="modul4">Einführung in die Informatik</option>
	    <option value="modul5">Gestaltung: Grundlagen/Technik</option>
	    <option value="modul6">Mathematik</option>
	    <option value="modul7">Rechnungswesen und Controlling</option>
	    <option value="modul8">Journalistische Grundlagen 2</option>
	    <option value="modul9">Soziologie</option>
	    <option value="modul10">Internettechnologien 1</option>
	    <option value="modul11">Typographie/Layout</option>
	    <option value="modul12">English for the media</option>
	    <option value="modul13">Medienwirtschaft und Marketing</option>
	    <option value="modul14">Spezieller Journalismus</option>
	    <option value="modul15">Medien und Kommunikation 1</option>
	    <option value="modul16">Internettechnologien 2</option>
	    <option value="modul17">Visuelle Kommunikation 1</option>
	    <option value="modul18">Statistik</option>
	    <option value="modul19">Praxissemester Bericht</option>
	    <option value="modul20">Investition und Finanzierung</option>
	    <option value="modul21">Medien und Kommunikation 2</option>
	    <option value="modul22">Medientechnik</option>
	    <option value="modul23">Visuelle Kommunikation 2</option>
	    <option value="modul24">Recht</option>
	    <option value="modul25">Medienprojekt 1</option>
	    <option value="modul26">Organisation und Führung</option>
	    <option value="modul27">Schwerpunkt 1</option>
	    <option value="modul28">PR und Unternehmenskommunikation</option>
	    <option value="modul29">Multimedia</option>
	    <option value="modul30">Seminar Medienforschung</option>
	    <option value="modul31">Medienprojekt 2</option>
	    <option value="modul32">Strategisches Medienmanagement</option>
	    <option value="modul33">Schwerpunkt 2</option>
		<option value="modul34">Medienrecht</option>
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
	  <br>
	  <!---Bootstrap Button Ausrechnen--->
<button type="submit" name="ausrechnen"class="btn btn-danger">Ausrechnen</button>
	
	
<!---Code ausführen, wenn Formular abgeschickt wurde--->
		<?php
	if(isset($_POST["ausrechnen"]))
		
    //Berechnung

   $average =  array_sum($numbers)/count($numbers);
   print_r($average);
		{
						echo $average;
					}
		?>
		
		
<?php
		
// Daten aus der Datenbank abrufen
$sqlKategorie = "SELECT kategorie FROM Noten";
$sqlModul = "SELECT modul FROM Noten";
$sqlNote = "SELECT note FROM Noten";

$resultKategorie = mysqli_query($conn, $sqlKategorie);
$resultModul = mysqli_query($conn, $sqlModul);
$resultNote = mysqli_query($conn, $sqlNote);

// Schleife, um die eingetragenen Daten anzuzeigen
if ($resultKategorie && $resultModul && $resultNote) {
    echo "<p>Bisherige Noten:</p><ul>";
    while ($rowKategorie = mysqli_fetch_assoc($resultKategorie)) {
        $rowModul = mysqli_fetch_assoc($resultModul);
        $rowNote = mysqli_fetch_assoc($resultNote);
        echo "<li>Kategorie: " . $rowKategorie["kategorie"] . ", Modul: " . $rowModul["modul"] . ", Note: " . $rowNote["note"] . "</li>";
    }
    echo "</ul>";
} else {
    die("Fehler bei der Abfrage der Datenbank: " . mysqli_error($conn));
}
?>
		

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
</html>