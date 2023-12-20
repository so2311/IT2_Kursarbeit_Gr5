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
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<?php
$can= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");

if (!empty($_POST)) {
    var_dump($_POST);
    $sql = "INSERT INTO Aufgaben (Module, Kategorien, Aufgaben, Datum) VALUES ('" . $_POST["Module"] . "','" . $_POST["Kategorien"] . "', '" . $_POST["Aufgaben"] . "', '" . $_POST["Datum"] . "')";

    $db_erg = mysqli_query($can, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
} 
	else {
	
	$sql = "SELECT * FROM Aufgaben JOIN Kategorien ON Aufgaben.Kategorien = Kategorien.KategorieID JOIN Module ON Aufgaben.Module = Module.ModulID ORDER BY AufgabeID DESC LIMIT 10 ";

}

$sql = "SELECT * FROM Kategorien";

$db_erg_kategorie = mysqli_query($can, $sql);

$sql = "SELECT * FROM Module";

$db_erg_modul = mysqli_query($can, $sql);
?>
<main>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Studierendenhelfer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="../index.php">Startseite</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../6039985sschraeder/php/notenberechner.php" id="notenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Notenberechner
                </a>
                <div class="dropdown-menu" aria-labelledby="notenDropdown">
                    <a class="dropdown-item" href="../6039985sschraeder/php/notenberechner.php">Notenrechner</a>
                    <a class="dropdown-item" href="../6039985sschraeder/php/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="../6039985sschraeder/php/modul.php">Modul</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../6038479seilers/checkliste.php" id="checklisteDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Checkliste
                </a>
                <div class="dropdown-menu" aria-labelledby="checklisteDropdown">
                    <a class="dropdown-item" href="../6038479seilers/checkliste.php">Checkliste</a>
                    <a class="dropdown-item" href="../6038479seilers/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="../6038479seilers/modul.php">Modul</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../6040337adueser/notizmanager.php" id="notizmanagerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notizmanager
                </a>
                <div class="dropdown-menu" aria-labelledby="notizmanagerDropdown">
                    <a class="dropdown-item" href="../6040337adueser/notizmanager.php">Manager</a>
                    <a class="dropdown-item" href="../6040337adueser/kategorie.php">Kategorie</a>
                    <a class="dropdown-item" href="../6040337adueser/semester.php">Semester</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="../ergebnisse.php">Ergebnisse</a></li>
        </ul>
    </div>
</nav>
	<header>
		<h1 style="color: black;">Checkliste</h1>
	<img src="Checklisten header.png" alt="Header">
</header>
	<br>
	<br>
<form action="checkliste.php" method="post">

    <!-- Class=conatainer wurde verwendet, um den Auswahl-Block als ganzes formatieren zu können -->

    <div class="container1">
        <!-- Der Name der Checkliste wird eingegeben, bzw. das Modul, für das man eine Checkliste anlegen möchte -->
        <label style="color: white;" for="Module">Modul:</label>
        <select name="Module" required>
            <option value="">Bitte Wählen</option>
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_modul, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['ModulID'] . ">" . $zeile['Module'] . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <!-- Die Kategorie wird eingegeben, bzw. die vier Säulen des Studiengangs -->
        <label style="color: white;" for="Kategorien">Kategorie:</label>
        <select name="Kategorien" required>
            <option value="">Bitte Wählen</option>
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_kategorie, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorien'] . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <!-- Insgesamt können pro Checkliste vier fällige Aufgaben eingegeben werden und das zugehörige Fälligkeitsdatum wird ausgewählt -->

        <label style="color: white;" for="Aufgaben">Aufgabe:</label>
        <input type="text" name="Aufgaben" required>
        <br>
		<br>
        <label style="color: white;" for="Datum">Fälligkeitsdatum:</label>
        <input type="date" name="Datum" required>
        
    </div>
    <br>
    <br>

    <!-- Mit dem Button werden die Daten gespeichert -->

    <button type="submit" onclick="addTask ()">Aufgabe hinzufügen</button>
	</main>
    </form>
    <br>
</body>
</html>