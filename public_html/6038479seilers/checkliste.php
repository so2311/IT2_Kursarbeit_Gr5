<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="de">
<head>
	 <meta charset="UTF-8">
	
	<!-- Steuerung und Verhalten der Website bei mobilen Geräten-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deine Checklisten</title>
<link rel="stylesheet" href="css/checkliste.css">
	<script src="checkliste.js"></script>
</head>
	
	<?php include "check_db_connect.php"; 
	
	if (!empty($_POST)) {
   $sql = "INSERT INTO Kategorie (Modul, Kategorie, Aufgabe, Datum) VALUES ('".$_POST["Modul"]."','".$_POST["Kategorie"]."', '".$_POST["Aufgabe"]."', '".$_POST["Datum"]."')";

$db_erg = mysqli_query( $can, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}  
} else {  
    
}
	
	
$sql = "SELECT * FROM Modul";

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
  echo "<td>". $zeile['ModulID'] . "</td>";
  echo "<td>". $zeile['Modul'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>	
	
<body>
	<h1 style="color: black;">Deine Checklisten</h1>
	<p></p>
	<p></p>
	
	<form action="checkliste.php" method="post">
	
	<!-- Class=conatainer wurde verwendet, um die drei Checklisten zu ordnen und angemessen darstellen zu können -->
	
		<div class="container1">
			
			<!-- Der Name der Checkliste wird eingegeben, bzw. das Modul, für das man eine Checkliste anlegen möchte -->
	
            <label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
            <br>
	    	<br>
			
			<!-- Die Kategorie wird eingegeben, bzw. die vier Säulen des Studiengangs -->
			
			 <label for="category">Kategorie:</label>
			<input type="text" name="category" required>
            <br>
		    <br>
			
			<!-- Insgesamt können pro Checkliste vier fällige Aufgaben eingegeben werden und das zugehörige Fälligkeitsdatum wird ausgewählt -->
			
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		    <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
	    	<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		    <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
	</div>
		
			<div class="container2">
		<label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
		<br>
		<br>
            <label for="category">Kategorie:</label>
        <input type="text" name="category" required>
            <br>
		    <br>
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
			   <input type="date" name="dueDate" required>
	      </div>
          
	<div class="container3">
		<label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
		<br>
		<br>
            <label for="category">Kategorie:</label>
       <input type="text" name="category" required>
            <br>
		    <br>
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
		<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
			<input type="date" name="dueDate" required>
    </div>
	<br>
	<br>	
	
	<!-- Mit dem Button werden die Daten gespeichert -->
	
		<button type="button" onclick="addTask ()">Aufgabe hinzufügen</button>
        <br>
	
<?php

	include 'fortschrittsbalken.php';
	
?>
</body>
</html>