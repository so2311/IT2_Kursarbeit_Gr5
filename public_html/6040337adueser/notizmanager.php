<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Notizenmanager</title>
</head>
<header class=header>
    <h1>Notizenmanager</h1>
    <img src="../bilder/Notizenmanager%20header.png" alt="Header">
</header>
<?php include "db_connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO Notizen (Semester, Kategorie, Kurs, Notizen) VALUES ('" . $_POST["semester"] . "','" . $_POST["kategorie"] . "', '" . $_POST["kurs"] . "', '" . $_POST["notiz"] . "')";

    $db_erg = mysqli_query($can, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
} else {

}


$sql = "SELECT * FROM Notizen JOIN Kategorie ON Notizen.Kategorie = Kategorie.KategorieID JOIN Semester ON Notizen.Semester = Semester.SemesterID ORDER BY NotizenID DESC LIMIT 10 ";

$db_erg = mysqli_query($can, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}


?>
<table>
    <tr>
        <th>notiz</th>
        <th>semester</th>
    </tr>
    <?php
    while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $zeile['NotizenID'] . "</td>";
        echo "<td>" . $zeile['Notizen'] . "</td>";
        echo "<td>" . $zeile['Semester'] . "</td>";
        echo "<td>" . $zeile['Kategorie'] . "</td>";
        echo "<td>" . $zeile['Kurs'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php

$sql = "SELECT * FROM Kategorie";

$db_erg_kategorie = mysqli_query($can, $sql);

$sql = "SELECT * FROM Semester";

$db_erg_semester = mysqli_query($can, $sql);
?>
<body>

<h1> Notizenmanager </h1>
<p>Mit diesem Notizenmanager behältst du den Überblick über alle deine Module und deine Lernaktivitäten:</p>
<!-- Semester kann ausgewählt werden -->
<!-- 4. Semester entfällt, da es sich um das Praxissemester handelt -->
<form action="notizmanager.php" method="post">
    <div class="form-container">
        <div class="left-column">
            <label for="semester">Semester:</label>
            <select name="semester" id="semester" onchange="updateCourses(this)">
                <option value="">Bitte Wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg_semester, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['SemesterID'] . ">" . $zeile['Semester'] . "</option>";
                }
                ?>
            </select>

            <br>

            <!-- Kategorie kann ausgewählt werden -->
            <label for="category">Kategorie:</label>
            <select name="kategorie" id="category" onchange="updateCourses()" disabled>
                <option value="" selected disabled>Bitte wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg_kategorie, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorie'] . "</option>";
                }
                ?>
            </select>

            <br>

            <!-- Kurse werden dynamisch mit JavaScript hinzugefügt -->
            <label for="course">Kurs:</label>
            <select name="kurs" id="course" onchange="updateCourses()" disabled>
                <option value="" selected disabled>Bitte wählen</option>
            </select>
            <br>

            <button id="nextButton" onclick="showNotes()" disabled>Weiter</button>
            <button class="button" onclick="resetForm()">Zurücksetzen</button>
        </div>

        <div id="notes-container">
            <!-- class und style einfügen -->
            <label for="notes">Notizen:</label>
            <textarea id="notes" name="notiz"></textarea>
            <button type="submit" class="button">Notizen speichern</button>
        </div>
    </div>
</form>
</body>
<script src="notizmanager.js"></script>
</html>