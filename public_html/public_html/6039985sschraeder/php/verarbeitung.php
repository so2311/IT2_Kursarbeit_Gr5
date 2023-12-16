<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>verarbeitung.php</title>
</head>

<body>
	
	<?php
// Verbindung zur Datenbank herstellen
include 'dbconnect.php'

// Daten aus dem Formular holen
$selectedKategorie = $_POST["kategorie"];
$selectedModul = $_POST["modul"];
$selectedNote = $_POST["note"];

// SQL-INSERT-Befehl ausführen
$sql = "INSERT INTO Note (note) VALUES ('$selectedNote')";
$sql = "INSERT INTO Kategorie (kategorie) VALUES ('$selectedKategorie')";
$sql = "INSERT INTO Modul (modul) VALUES ($selectedModul')";
	
	
// Verbindung zur Datenbank schließen
$conn->close();
?>
	
	
</body>
</html>