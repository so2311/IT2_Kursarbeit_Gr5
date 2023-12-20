<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">

    <!-- Steuerung und Verhalten der Website bei mobilen Geräten-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deine Checklisten</title>
    <link rel="stylesheet" href="css/checkliste.css">
    <script src="checkliste.js"></script>
</head>
	
	<?php 
	
	$con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");

if (!empty($_POST)) {
    $sql = "INSERT INTO Module (Module) VALUES ('" . $_POST["Module"] . "')";

    $db_erg = mysqli_query($con, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}
?>

<body>
<h1 style="color: black;">Modul angeben</h1>
<p></p>
<p></p>

<form action="checkliste.php" method="post">

    <!-- Class=conatainer wurde verwendet, um die drei Checklisten zu ordnen und angemessen darstellen zu können -->

    <div class="container1">
        <!-- Der Name der Checkliste wird eingegeben, bzw. das Modul, für das man eine Checkliste anlegen möchte -->
        <label for="listname">Modul:</label>
        <input type="text" name="Module">
          
        <br>
        <br>
	</div>
    </form>
    <br>
</body>
</html>