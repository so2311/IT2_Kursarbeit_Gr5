<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Notizenmanager</title>
</head>

<?php include "db_connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO Kategorie (Kategorie) VALUES ('" . $_POST["kategorie"] . "')";

    $db_erg = mysqli_query($can, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}
?>
<body>

<h1> Notizenmanager </h1>
<p>Mit diesem Notizenmanager behältst du den Überblick über alle deine Module und deine Lernaktivitäten:</p>
<!-- Semester kann ausgewählt werden -->
<!-- 4. Semester entfällt, da es sich um das Praxissemester handelt -->
<form action="kategorie.php" method="post">
    <div class="form-container">
        <div class="left-column">
            <label for="kategorie">Kategorie:</label>
            <input type="text" name="kategorie">
        </div>

        <div id="notes-container">
            <button type="submit" class="button">Notizen speichern</button>
        </div>
    </div>
</form>
</body>
<script src="notizmanager.js"></script>
</html>