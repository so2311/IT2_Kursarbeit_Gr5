<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

include "dbconnect.php";
	
//JOIN für Fremdschlüssel fk_modul und fk_kategorie und die letzten 10 Beiträge mit DESC LIMIT 10
$sql = "SELECT * FROM Noten JOIN Kategorien ON Noten.kategorie = Kategorien.kategorieid JOIN Modul ON Noten.Modul = Modul.modulid 
ORDER BY notenid DESC LIMIT 10 ";
$db_erg = mysqli_query($con, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}

?>

<!--Tabelle für die Startseite-->

<table class="table">
    <tr>
        <th>Kategorien</th>
	    <th>Modul</th>
	    <th>Note</th>
    </tr>
<?php
       
 while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $zeile['kategorie'] . "</td>";
        echo "<td>" . $zeile['modul'] . "</td>";
        echo "<td>" . $zeile['note'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>


<?php

$sql = "SELECT * FROM Kategorien";

$db_erg_kategorien = mysqli_query($con, $sql);

$sql = "SELECT * FROM Modul";
$db_erg_modul = mysqli_query($con, $sql);
?>