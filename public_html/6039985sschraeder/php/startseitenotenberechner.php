
<?php

//JOIN für Fremdschlüssel fk_modul und fk_kategorie und die letzten 10 Beiträge mit DESC LIMIT 10
$sql = "SELECT * FROM 
Notizen JOIN Kategorie ON Notizen.Kategorie = Kategorie.

KategorieID JOIN Semester ON Notizen.Semester = Semester.SemesterID 

ORDER BY NotizenID DESC LIMIT 10 ">

$db_erg = mysqli_query($con, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}

?>

<!--Tabelle für die Startseite-->

<table>
    <tr>
        <th>Kategorie</tr>
	    <th>Modul</tr>
	    <th>Note</tr>
		<th>Durschnitt</th>
	 
   </tr>
<?php
       
 while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $zeile['kategorien'] . "</td>";
        echo "<td>" . $zeile['modul'] . "</td>";
        echo "<td>" . $zeile['note'] . "</td>";
        echo "<td>" . $zeile['durschnitt'] . "</td>";
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