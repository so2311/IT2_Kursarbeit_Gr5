<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Notizenmanager</title>
</head>
	
<?php include "../db_connect.php"; 
	
	if (!empty($_POST)) {
   $sql = "INSERT INTO Semester (Semester, Kategorie, Kurs, Notizen) VALUES ('".$_POST["semester"]."','".$_POST["kategorie"]."', '".$_POST["kurs"]."', '".$_POST["notiz"]."')";

$db_erg = mysqli_query( $can, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}  
} else {  
    
}
	
	
$sql = "SELECT * FROM Semester";

$db_erg = mysqli_query( $can, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
var_dump($_POST);
	echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['SemesterID'] . "</td>";
  echo "<td>". $zeile['Semester'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>	
<body>
	
	<h1> Notizenmanager </h1>
	<p>Mit diesem Notizenmanager behältst du den Überblick über alle deine Module und deine Lernaktivitäten:</p>
<!-- Semester kann ausgewählt werden -->
<!-- 4. Semester entfällt, da es sich um das Praxissemester handelt -->
	<form action="semester.php" method="post">
<div class="form-container">
    <div class="left-column">
        <label for="semester">Semester:</label>
        <select name="semester" id="semester" onchange="updateCourses()">
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
        <select name="kategorie" id="category" onchange="updateCourses()" disabled>
            <option value="" selected disabled>Bitte wählen</option>
            <option value="gestaltung">Gestaltung</option>
            <option value="technik">Technik</option>
            <option value="journalismus">Journalismus</option>
            <option value="wirtschaft">Wirtschaft</option> 
        </select>

        <br>

        <!-- Kurse werden dynamisch mit JavaScript hinzugefügt -->
        <label for="course">Kurs:</label>
        <select name="kurs" id="course" onchange="updateCourses()" disabled>
            <option value="" selected disabled>Bitte wählen</option>
        </select>
        <br>
		
	<button id="nextButton" onclick="showNotes()" disabled>Weiter</button>
        <button class="button" onclick="resetForm()">Zurücksetzen</button>
    </div>
	
		 <div id="notes-container">
			 <!-- class und style einfügen -->
        <label for="notes">Notizen:</label>
        <textarea id="notes" name="notiz"></textarea>
        <button type="submit" class="button" >Notizen speichern</button>
    </div>
</div>
	</form>		
</body>
<script src="notizmanager.js"></script>
</html>