<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ergebnisse</title>
</head>

	<!-- stylesheet verlinkung-->
	<link rel="stylesheet" href="stylesheet.css">

	<div class="container">

<body class="Startseite">
	  <header class=header>
		  <h1>Startseite</h1>
	  </header>
	  <nav class=nav>
		  <?php
		  // Navigationsleiste
		  	include "navigation.php";
		  ?>
		  </nav>


<body>

	<div class="container">

	
<header>	
<h1>Übersicht der Ergebnisse </h1>
</header>
	
<nav>
	Navigation
	</nav>
	
<side>
	Link zurück?
	</side>

	<main>
<h2>Deine Ergebnisse aus dem Notenberechner</h2>

	<?php
    include "6039985sschraeder/php/ergebnissenotenberechner.php";

    ?>
	
	
	
<h2>Deine Ergebnisse aus den Checklisten</h2>
<p> Anzahl der Checklisten</p>



<br>
<br>
	
	

	
<h2>Deine Ergebnisse aus dem Notizenmanager:</h2>
<p>Anzahl der Notizen</p>
        <?php
        include "6040337adueser/ergebnissenotizmanager.php";

        ?>

        <br>
<br>
	
	
</main>
	

</body>

</html>