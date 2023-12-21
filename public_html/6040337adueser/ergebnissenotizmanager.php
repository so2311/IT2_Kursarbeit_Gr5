<?php
// Einbindung der Datenbank
include "db_connect.php";


// Anzahl der Datensätze in der Noten Tabelle
$sqlCount = "SELECT COUNT(*) AS num FROM Notizen";
$resultCount = mysqli_query($can, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);

$num = $rowCount['num'];

if ($num > 0) {
    echo "Anzahl eingetragener Notizen: $num <br>";
} else {
    echo "Keine Ergebnisse <br>";
}
// Anzahl der Datensätze je Kategorie
$sqlCount = "SELECT * FROM Kategorie";
$resultSelect = mysqli_query($can, $sqlCount);

while ($zeile = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC)) {
    $sqlCount = "SELECT COUNT(*) AS count_value FROM Notizen WHERE Kategorie = ".$zeile['KategorieID'];
    $resultCount = mysqli_query($can, $sqlCount);
    $rowCount = mysqli_fetch_assoc($resultCount);
    echo $zeile['Kategorie']." : " . $rowCount['count_value'] . "<br>";
}

?>