<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dbconnect</title>
</head>

<body>
		<?php
	// Verbindung zur MySQL-Datenbank herstellen
    //mysqli_connect ("DB-Server (Domainname)", "Benutzername (Login)", "Kennwort", "Datenbank")
    $con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E", "m12242-08");
	
// Mit folgenden definierten Variablen werden die Werte eingefügt
$listname = "Mathe, Grundlagen der Ökonomie, Journalistische Grundlagen 1, Psychologie, Einführung in die Informatik, Gestaltung Grundlagen/Technik, Wissenschaftliches Arbeiten 1, Rechnungswesen und Controling, Journalistische Grundlagen 2, Soziologie, Internettechnologien 1, Typographie/Layout, English for the media, Medienwirtschaft und Marketing, Spezieller Journalismus, Medien und Kommunikation 1, Internettechnologien 2, Visuelle Kommunikation 1, Statistik, Investition und Finanzierung, Medien und Kommunikation 2, Medientechnik, Visuelle Kommunikation 2, Recht, Medienprojekt 1, Organisation und Führung, Schwerpunkt 1, PR und Unternehmenskommunikation, Multimedia, Seminar Medienforschung, Medienprojekt 2, Strategisches Medienmanagement, Schwerpunkt 2, Medienrecht";
	
	$sql = "INSERT INTO modul (modul_spalte) VALUES ('$listname')";
	
$category = "Wirtschaft, Technik, Journalismus, Gestaltung";
	
	$sql = "INSERT INTO kategorie (kategorie_spalte) VALUES ('$category')";
	
$task = "Lernzettel schreiben, Übungszettel bearbeiten, Lernen";
	
	$sql = "INSERT INTO aufgabe (aufgabe_spalte) VALUES ('$task')";
	
$dueDate = "2024-02-01, 2024-02-02, 2024-02-03, 2024-02-04, 2024-02-05, 2024-02-06, 2024-02-07, 2024-02-08, 2024-02-09, 2024-02-10, 2024-02-11, 2024-02-12, 2024-02-13, 2024-02-14,2024-02-15";
	
	$sql = "INSERT INTO aufgabe (datum_spalte) VALUES ('$dueDate')";
	
// Prüfen, ob das Einfügen erfolgreich war
if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich eingefügt";
} else {
    echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

// Verbindung schließen
$conn->close();
?>

</body>
</html>