<?php
error_reporting(E_ALL);
 ini_set("display_errors", 1);
	
	
include "dbconnect.php";

$con = mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");


// Anzahl der Datensätze in der Noten Tabelle
$sqlCount = "SELECT COUNT(*) AS num FROM Noten";
$resultCount = mysqli_query($con, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);

$num = $rowCount['num'];

if ($num > 0) {
    echo "Anzahl eingetragener Noten: $num <br>";
} else {
    echo "Keine Ergebnisse <br>";
}


// Durchschnitt aller Noten aus allen Modulen
$sqlAvg = "SELECT AVG(note) AS avg_value FROM Noten";
$resultAvg = mysqli_query($con, $sqlAvg);

$rowAvg = mysqli_fetch_assoc($resultAvg);
if ($rowAvg['avg_value'] !== null) {
    echo "Notendurchschnitt: " . $rowAvg['avg_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}










// Summe der Module mit 1,0
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 1.0";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 1,0: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 1,3
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 1.3";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 1,3: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 1,7
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 1.7";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 1,7: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 2,0
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 2.0";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 2,0: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 2,3
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 2.3";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 2,3: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 2,7
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 2.7";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 2,7: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 3,0
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 3.0";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 3,0: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 3,3
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 3.3";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 3,3: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 3,7
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 3.7";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 3,7: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 4,0
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 4.0";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 4,0: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Module mit 5,0
$sqlSum = "SELECT SUM(note) AS sum_value FROM Noten WHERE note = 5.0";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== null) {
    echo "Anzahl der Module mit der Note 5,0: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}







// Schließe die Verbindung
mysqli_close($con);

?>