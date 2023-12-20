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
	
		<!-- stylesheet verlinkung bootstrap für navigation-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Bootstrap Einbindung -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- responsive Design mit bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
	
<!---Navigationsmenü--->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Studierendenhelfer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Startseite</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="6039985sschraeder/php/notenberechner.php" id="notenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notenberechner
                </a>
                <div class="dropdown-menu" aria-labelledby="notenDropdown">
                    <a class="dropdown-item" href="6039985sschraeder/php/notenberechner.php">Notenrechner</a>
                    <a class="dropdown-item" href="6039985sschraeder/php/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="6039985sschraeder/php/modul.php">Modul</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="checklisteDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Checkliste
                </a>
                <div class="dropdown-menu" aria-labelledby="checklisteDropdown">
                    <a class="dropdown-item" href="6038479seilers/checkliste.php">Checkliste</a>
                    <a class="dropdown-item" href="6038479seilers/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="6038479seilers/modul.php">Modul</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="notizmanagerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notizmanager
                </a>
                <div class="dropdown-menu" aria-labelledby="notizmanagerDropdown">
                    <a class="dropdown-item" href="6040337adueser/notizmanager.php">Manager</a>
                    <a class="dropdown-item" href="6040337adueser/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="6040337adueser/semester.php">Semester</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="ergebnisse.php">Ergebnisse</a></li>
        </ul>
    </div>
</nav>

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
			
			<!-- Bootstrap für Navigation-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			
		<footer style="color:white">Jade Hochschule; Der Studierendenhelfer von Selina Schräder, Allegra Düser und Sophie Eilers</footer>
</html>