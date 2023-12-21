<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ergebnisse</title>
</head>

	<!-- stylesheet verlinkung-->
	<link rel="stylesheet" href="../public_html/6040337adueser/css/style.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<div class="container">

	  </header>
<body>
<!-- Navigationsleiste -->
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
</body>	

<body>

	<div class="container">

	
<header>	
<h1>Übersicht der Ergebnisse </h1>
</header>
	

	<main>
<!-- Statistiken -->
<h2>Deine Ergebnisse aus dem Notenberechner</h2>

	<?php
    include "6039985sschraeder/php/ergebnissenotenberechner.php";

    ?>
	
<br>	
	
<h2>Deine Ergebnisse aus den Checklisten</h2>
<?php
        include "6038479seilers/checklistergebnisse.php";

        ?>



<br>
	
	

	
<h2>Deine Ergebnisse aus dem Notizenmanager:</h2>

        <?php
        include "6040337adueser/ergebnissenotizmanager.php";

        ?>

        <br>
<br>
	
	
</main>
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer style="color:white">Jade Hochschule; Der Studierendenhelfer von Selina Schräder, Allegra Düser und Sophie Eilers</footer>
</html>