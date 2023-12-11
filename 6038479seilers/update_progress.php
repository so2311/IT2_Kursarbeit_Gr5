<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simuliere eine Verarbeitung der Daten und berechne den Fortschritt
$name = $_POST['name'];
$category = $_POST['category'];
$task = $_POST['task'];
$date = $_POST['date'];

// Beispiel: Der Fortschritt wird basierend auf der Länge der Aufgabe berechnet
$progress = strlen($task);

// Gib den Fortschritt in Prozent aus
echo $progress;

?>

Oder das?:
<?php

// Simuliere einen Fortschritt von 0% bis 100%
for ($i = 1; $i <= 100; $i++) {
    // Gib den Fortschritt in Prozent aus
    echo "<script>updateProgress($i);</script>";

    // Verzögere die Ausführung für Demo-Zwecke
    usleep(100);
}

?>
