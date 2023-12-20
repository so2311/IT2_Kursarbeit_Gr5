<?php

include "dbconnect.php";

//Eintragen derKategorie in die Datenbank
if (!empty($_POST)) {
    $sql = "INSERT INTO Kategorien (Kategorie) VALUES ('" . $_POST["kategorie"] . "')";

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

        <form action="kategorie.php" method="POST">

            <label for="kategorie">Kategorie Name:</label>
            <input type="text" name="kategorie">
            <div id="notes-container">
                <button type="submit" class="button">Kategorie speichern</button>
            </div>
        </div>
			
		<footer style="color:white">Jade Hochschule; Der Studierendenhelfer von Selina Schräder, Allegra Düser und Sophie Eilers</footer>		
</html>
