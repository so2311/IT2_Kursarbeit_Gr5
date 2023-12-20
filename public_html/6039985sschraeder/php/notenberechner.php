<?php
//Datenbank Connection
$con = mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");

// Senden der drei Daten beim drücken des Buttons "ausrechnen"
if (isset($_POST['ausrechnen'])) {
    $kategorie = $_POST['kategorie'];
    $modul = $_POST['modul'];
    $note = $_POST['note'];

// Einfügen der drei Daten in die entsprechenden Spalten in der Tabelle Noten
    $queryNoten= "INSERT INTO Noten (modul, kategorie,note) VALUES ('$kategorie', '$modul', $note)";
    mysqli_query($con, $queryNoten);

    if ($queryNoten) {
        echo "Daten gespeichert";
    } else {
        echo "Daten konnten nicht gespeichert werden";
    }
}

// Auslesen aus der Datenbank
$sql = "SELECT * FROM Noten JOIN Kategorien ON Noten.kategorie = Kategorien.kategorieid JOIN Modul ON Noten.modul = Modul.modulid";

$db_erg_Noten = mysqli_query($con, $sql);


// Auslesen aus der Datenbank
$sql = "SELECT * FROM Modul";

$db_erg = mysqli_query($con, $sql);

// Auslesen aus der Datenbank
$sql = "SELECT * FROM Kategorien";

$db_erg_kategorie = mysqli_query($con, $sql);

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
<div class="container">

    <header>

        <h1>Notenberechner</h1>
		<!---Headerbild--->
         <img src="../../bilder/Notenberechner%20header.png" alt="Header">
    </header>

 
    <main>

        <body>

        <p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu
            berechnen. Wähle dafür einfach die passende Kategorie, das jeweilige Modul und deine Note in den
            Dropdownmenüs aus und klicke auf "Ausrechnen". </p>
        <br>
			
		<!-- Dropdownmenü-->
        <form action="notenberechner.php" method="POST">

            <label for="kategorie">Kategorie:</label>
            <select name="kategorie" required>
                <option value="">Bitte Wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg_kategorie, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['kategorieid'] . ">" . $zeile['kategorie'] . "</option>";
                }
                ?>
            </select>
            <br>

            <label for="modul">Modul:</label>
            <select name="modul" required>
                <option value="">Bitte Wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['modulid'] . ">" . $zeile['modul'] . "</option>";
                }
                ?>
            </select>
            <br>

			 <label for="note">Note:</label>
            <select name="note" required>
                <option value="">Bitte Wählen</option>
                <option value="1.0">1.0</option>
                <option value="1.3">1.3</option>
                <option value="1.7">1.7</option>
                <option value="2.0">2.0</option>
                <option value="2.3">2.3</option>
                <option value="2.7">2.7</option>
				<option value="3.0">3.0</option>
				<option value="3.3">3.3</option>
				<option value="3.7">3.7</option>
			    <option value="4.0">4.0</option>
				<option value="5.0">5.0</option>
            </select>
            <br>
			

            <!---Bootstrap Button Ausrechnen--->
            <button type="submit" name="ausrechnen" class="btn btn-danger">Ausrechnen</button>

        </form>
        <br>
			
        <?php
		//Ausgabe der Einträge in einer simplen Tabelle
        echo '<table border="1">';
        while ($zeile = mysqli_fetch_array( $db_erg_Noten, MYSQLI_ASSOC))
        {
            echo "<tr>";
            echo "<td>". $zeile['notenid'] . "</td>";
            echo "<td>". $zeile['modul'] . "</td>";
            echo "<td>". $zeile['kategorie'] . "</td>";
            echo "<td>". $zeile['note'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <p> Klicke auf "Ergebnisse", um deine Noten in einer Übersicht zu sehen. Du siehst dort außerdem in einer
            Statistik, wie oft du welche Note bekommen hast. </p>

        <!---Bootstrap Button "Ergebnisse" der zu den Auswertungen führt--->
        <p><a href="ergebnisse.php" class="btn btn-danger">Ergebnisse</a></p>

    </main>
		
		<!-- Bootstrap für Navigation-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body>
	<footer style="color:white">Jade Hochschule; Der Studierendenhelfer von Selina Schräder, Allegra Düser und Sophie Eilers</footer>
</html>