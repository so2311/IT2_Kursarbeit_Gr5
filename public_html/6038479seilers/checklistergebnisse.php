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

// Summe der Aufgaben mit dem Fälligkeitsdatum 19. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-19";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 19. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 20. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-20";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 20. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 21. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-21";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 21. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 22. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-22";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 22. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 23. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-23";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 23. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 24. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-24";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 24. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 25. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-25";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 25. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 26. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-26";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 26. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 27. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-27";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 27. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 28. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-28";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 28. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 29. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-29";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 29. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 30. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-30";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 30. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

// Summe der Aufgaben mit dem Fälligkeitsdatum 31. Januar 2024
$sqlSum = "SELECT COUNT(Datum) AS sum_value FROM Aufgaben WHERE Datum = 2024-01-31";
$resultSum = mysqli_query($con, $sqlSum);

$rowSum = mysqli_fetch_assoc($resultSum);
if ($rowSum['sum_value'] !== "0") {
    echo "Anzahl der Aufgaben mit dem Fälligkeitsdatum 31. Januar 2024: " . $rowSum['sum_value'] . "<br>";
} else {
    echo "Keine Ergebnisse <br>";
}

$sqlCount = "SELECT * FROM Aufgaben";
$resultSelect = mysqli_query($con, $sqlCount);

while ($zeile = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC)) {
    $sqlCount = "SELECT COUNT(Datum) AS count_value FROM Aufgaben WHERE Aufgaben = ".$zeile['Datum'];
    $resultCount = mysqli_query($con, $sqlCount);
    $rowCount = mysqli_fetch_assoc($resultCount);
    echo $zeile['Datum']." : " . $rowCount['count_value'] . "<br>";
}

?>