<?php
//Navigation für den Frontend Bereich

$navigation = ["index.php" => " Home ",
              "../6039985sschraeder/php/notenberechner.php" => " Notenberechner ",
              "../6038479seilers/checkliste.php" => " Checkliste ",
			  "../6040337adueser/notizmanager.php" => " Notizmanager ",
			  "ergebnisse.php" => " Ergebnisse "];
echo "<ul>";
foreach ($navigation as $nav => $titel){
	echo "<li><a href='$nav' class='titel'>$titel</a></li>";
}
echo "</ul>"
?>