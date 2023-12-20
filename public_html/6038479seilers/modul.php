<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");

if (!empty($_POST)) {
    $sql = "INSERT INTO Module (Module) VALUES ('" . $_POST["Module"] . "')";	
	
    $db_erg = mysqli_query($con, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">

    <title>Deine Checklisten</title>
    <link rel="stylesheet" href="css/checkliste.css">
    <script src="checkliste.js"></script>
	
	 <!-- Bootstrap Einbindung -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Steuerung und Verhalten der Website bei mobilen Geräten-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
	
  <body>
<div class="container">

    <header>
<h1 style="color: black;">Modul angeben</h1>
			</header>
<p></p>
<p></p>
<main>
	<body>

<form action="checkliste.php" method="post">

    <!-- Class=conatainer wurde verwendet, um die drei Checklisten zu ordnen und angemessen darstellen zu können -->

    <div class="container1">
		
        <!-- Der Name der Checkliste wird eingegeben, bzw. das Modul, für das man eine Checkliste anlegen möchte -->
        <label for="listname">Modul:</label>
        <input type="text" name="Module">
          
        <br>
        <br>
		<button type="submit" onclick="addTask ()">Modul hinzufügen</button>
	</div>
    </form>
    <br>
</body>
</html>