<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

include "dbconnect.php";
	
//JOIN für Fremdschlüssel fk_modul und fk_kategorie und die letzten 10 Beiträge mit DESC LIMIT 10
$sql = "SELECT * FROM Noten JOIN Kategorien ON Noten.Kategorien = Kategorien.kategorieid JOIN Modul ON Noten.Modul = Modul.modulid 
ORDER BY notenid DESC LIMIT 10 ";

$db_erg = mysqli_query($con, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}




            // Durchschnitt aller Noten aus allen Modulen
            $sqlAvg = "SELECT AVG(note) AS avg_value FROM Noten";
            $resultAvg = mysqli_query($con, $sqlAvg);
			
?>

<!--Tabelle für die Startseite-->

<html></html>
<table>
    <tr>
        <th>Kategorie</tr>
	    <th>Modul</tr>
	    <th>Note</tr>
		<th>Durchschnitt</th>
	 
   </tr>
</html>
<?php
       
 while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $zeile['kategorie'] . "</td>";
        echo "<td>" . $zeile['modul'] . "</td>";
        echo "<td>" . $zeile['note'] . "</td>";
        echo "<td>" . $resultAVG['durchschnitt'] . "</td>";
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