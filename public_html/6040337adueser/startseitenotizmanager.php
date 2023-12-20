<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php include "db_connect.php";
	
// Fremdschlüssel und anzeigen der letzten 10 Einträge mit Limit
$sql = "SELECT * FROM Notizen JOIN Kategorie ON Notizen.Kategorie = Kategorie.KategorieID JOIN Semester ON Notizen.Semester = Semester.SemesterID ORDER BY NotizenID DESC LIMIT 10 ";

$db_erg = mysqli_query($can, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}


?>
    <table class="table">
        <tr>
            <th>Notiz ID</th>
            <th>Notiz</th>
            <th>Semester</th>
            <th>Kategorie</th>
            <th>Kurs</th>
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