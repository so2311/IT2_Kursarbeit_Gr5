<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!-- Optimierung für mobile Endgeräte -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Navigationsleiste --> 
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
	</body>
	
    <title> Notizenmanager</title>
</head>
<header class=header>
    <h1>Notizenmanager</h1>
    <img src="../bilder/Notizenmanager%20header.png" alt="Header">
</header>
	<!-- Einbindung der Datenbank -->
<?php include "db_connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO Notizen (Semester, Kategorie, Kurs, Notizen) VALUES ('" . $_POST["semester"] . "','" . $_POST["kategorie"] . "', '" . $_POST["kurs"] . "', '" . $_POST["notiz"] . "')";

    $db_erg = mysqli_query($can, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
} else {

}

// Fremdschlüsseleinbindung
$sql = "SELECT * FROM Notizen JOIN Kategorie ON Notizen.Kategorie = Kategorie.KategorieID JOIN Semester ON Notizen.Semester = Semester.SemesterID ORDER BY NotizenID DESC LIMIT 10 ";

$db_erg = mysqli_query($can, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
}

?>

<?php
$sql = "SELECT * FROM Kategorie";

$db_erg_kategorie = mysqli_query($can, $sql);

$sql = "SELECT * FROM Semester";

$db_erg_semester = mysqli_query($can, $sql);
?>
	

<body>
<p>Mit diesem Notizenmanager behältst du den Überblick über alle deine Module und deine Lernaktivitäten:</p>
<!-- Semester kann ausgewählt werden -->
<!-- 4. Semester entfällt, da es sich um das Praxissemester handelt -->
<form action="notizmanager.php" method="post">
    <div class="form-container">
        <div class="left-column">
            <label for="semester">Semester:</label>
            <select name="semester" id="semester" onchange="updateCourses(this)">
                <option value="">Bitte Wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg_semester, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['SemesterID'] . ">" . $zeile['Semester'] . "</option>";
                }
                ?>
            </select>

            <br>

            <!-- Kategorie kann ausgewählt werden -->
            <label for="category">Kategorie:</label>
            <select name="kategorie" id="category" onchange="updateCourses()" disabled>
                <option value="" selected disabled>Bitte wählen</option>
                <?php
                while ($zeile = mysqli_fetch_array($db_erg_kategorie, MYSQLI_ASSOC)) {
                    echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorie'] . "</option>";
                }
                ?>
            </select>

            <br>

            <!-- Kurse werden dynamisch mit JavaScript hinzugefügt -->
            <label for="course">Kurs:</label>
            <select name="kurs" id="course" onchange="updateCourses()" disabled>
                <option value="" selected disabled>Bitte wählen</option>
            </select>
            <br>

            <button id="nextButton" onclick="showNotes()" disabled>Weiter</button>
            <button class="button" onclick="resetForm()">Zurücksetzen</button>
        </div>

        <div id="notes-container">
            <!-- class und style einfügen -->
            <label for="notes">Notizen:</label>
            <textarea id="notes" name="notiz"></textarea>
            <button type="submit" class="button">Notizen speichern</button>
        </div>
    </div>
</form>
	<!-- Tabellen und CSS Bootstrap -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="notizmanager.js"></script>
	<footer style="color:white">Jade Hochschule; Der Studierendenhelfer von Selina Schräder, Allegra Düser und Sophie Eilers</footer>
</html>