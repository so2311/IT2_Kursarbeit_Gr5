<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

$con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");
	
//JOIN für Fremdschlüssel fk_modul und fk_kategorie und die letzten 10 Beiträge mit DESC LIMIT 10
$sql = "SELECT * FROM Aufgaben JOIN Kategorien ON Aufgaben.Kategorien = Kategorien.KategorieID JOIN Module ON Aufgaben.Module = Module.ModulID ORDER BY AufgabenID DESC LIMIT 10 ";

$db_erg = mysqli_query($con, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}

?>

<!--Tabelle für die Startseite-->

<table>
    <tr>
        <th>Modul</tr>
	    <th>Kategorie</tr>
	    <th>Aufgabe</tr>
		<th>Durschnitt</th>
	 
   </tr>
<?php
       
 while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $zeile['Module'] . "</td>";
        echo "<td>" . $zeile['Kategorien'] . "</td>";
        echo "<td>" . $zeile['Aufgaben'] . "</td>";
        echo "<td>" . $zeile['Datum'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>


<?php

$sql = "SELECT * FROM Kategorien";

$db_erg_kategorien = mysqli_query($con, $sql);

$sql = "SELECT * FROM Module";
$db_erg_modul = mysqli_query($con, $sql);
?>