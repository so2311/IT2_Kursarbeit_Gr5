<?php

// Verbindung zur MySQL-Datenbank herstellen
//mysqli_connect ("DB-Server (Domainname)", "Benutzername (Login)", "Kennwort", "Datenbank")

$con= mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");
if ($conn->connect_error) {
	die('Connection failed: '.$conn->connect_error);
	
} else {
	$stmt=$conn->prepare("insert into notenberechner(kategorie, modul, note) values(?, ?, ?)");
	$stmt->bind_param("sss", $kategorie, $modul, $note);
	$stmt->execute();
	echo "Noteneingabe war erfolgreich";
	$stmt->close();
}
	
//Daten aus dem Formular senden
$kategorie=$_POST['kategorie'];
$modul=$_POST['modul'];
$note=$_POST['note'];


// SQL-INSERT-Befehl ausführen
$sql = "INSERT INTO Note (note) VALUES ('$selectedNote')";
$sql = "INSERT INTO Kategorie (kategorie) VALUES ('$selectedKategorie')";
$sql = "INSERT INTO Modul (modul) VALUES ($selectedModul')";
	
	
// Verbindung zur Datenbank schließen
$conn->close();
?>
	
	
</body>
</html>