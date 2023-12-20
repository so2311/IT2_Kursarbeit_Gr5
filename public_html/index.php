<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Startseite</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="Startseite">
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

<div class="container">

    <header class="header">
        <!-- Replace with your header image -->
        <img src="bilder/Startseite%20header.png" alt="Header" class="img-fluid center-header">
    </header>
    <!-- Content here -->
    <h1>Der Studierendenhelfer</h1>
    <?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include "6039985sschraeder/php/startseitenotenberechner.php";
    //include "../6038479seilers/startseitecheckliste.php";
    include "6040337adueser/startseitenotizmanager.php";

    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body>
</html>
