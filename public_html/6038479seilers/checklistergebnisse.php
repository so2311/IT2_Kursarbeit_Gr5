<?php
error_reporting(E_ALL);
 ini_set("display_errors", 1);
	
$con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");


// Anzahl der Datensätze in der Aufgaben Tabelle
$sqlCount = "SELECT COUNT(*) AS num FROM Aufgaben";
$resultCount = mysqli_query($con, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);

$num = $rowCount['num'];

if ($num > 0) {
    echo "Anzahl eingetragener Aufgaben: $num <br>";
} else {
    echo "Keine Ergebnisse <br>";
}

$sqlDistinctDates = "SELECT DISTINCT Datum FROM Aufgaben";
$resultDistinctDates = mysqli_query($con, $sqlDistinctDates);

while ($dateRow = mysqli_fetch_array($resultDistinctDates, MYSQLI_ASSOC)) {
    $currentDate = $dateRow['Datum'];

    $sqlCount = "SELECT COUNT(*) AS count_value FROM Aufgaben WHERE Datum = '$currentDate'";
    $resultCount = mysqli_query($con, $sqlCount);

    $rowCount = mysqli_fetch_assoc($resultCount);
    echo $currentDate . " : " . $rowCount['count_value'] . "<br>";
}

// Schließe die Verbindung zur Datenbank
mysqli_close($con);

?>