<?php
// Hier könntest du eine Datenbankverbindung herstellen und die Daten speichern.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listName = $_POST["listName"];
    $category = $_POST["category"];
    $task = $_POST["task"];
    $dueDate = $_POST["dueDate"];

    // Hier könntest du die Daten in die Datenbank speichern oder anderweitig verarbeiten.
    // Beispiel: Einfache Ausgabe der Daten
    echo "Checkliste gespeichert:<br>";
    echo "Modul: $listName<br>";
    echo "Kategorie: $category<br>";
    echo "Aufgabe: $task<br>";
    echo "Fälligkeitsdatum: $dueDate<br>";

    // Hier könntest du den prozentualen Fortschritt berechnen und in die Datenbank speichern.
    // Beispiel: Zufälliger Fortschritt zwischen 0 und 100
    $progress = rand(0, 100);
    echo "Fortschritt: $progress%";
}
?>
