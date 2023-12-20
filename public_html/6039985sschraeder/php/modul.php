<?php
	
include "dbconnect.php";

//Daten eintragen in Tabelle Modul
if (!empty($_POST)) {

    $sql = "INSERT INTO Modul (Modul) VALUES ('" . $_POST["modul"] . "')";

    $db_erg = mysqli_query($con, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}
?>	


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notenberechner</title>

    <!-- stylesheet verlinkung-->
    <link rel="stylesheet" href="notenberechnerstyle.css">


    <!-- Bootstrap Einbindung -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- responsive Design mit bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">

    <header>

        <h1>Notenberechner</h1>

    </header>

    <main>


        <body>

        <form action="modul.php" method="POST">

            <label for="modul">Modul Name:</label>
            <input type="text" name="modul">
            <div id="notes-container">
                <button type="submit" class="button">Modul speichern</button>
            </div>
        </div>
				
</html>