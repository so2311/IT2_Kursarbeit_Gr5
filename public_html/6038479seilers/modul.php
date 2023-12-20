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
    <script src="checkliste.js"></script>
</head>

	<?php
$can= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");

if (!empty($_POST)) {
    $sql = "INSERT INTO Module (Modul) VALUES ('" . $_POST["Modul"] . "')";

    $db_erg = mysqli_query($can, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}
?>

<body>
<h1 style="color: black;">Deine Checklisten</h1>
<p></p>
<p></p>

<form action="checkliste.php" method="post">

    <!-- Class=conatainer wurde verwendet, um die drei Checklisten zu ordnen und angemessen darstellen zu können -->

    <div class="container1">
        <!-- Der Name der Checkliste wird eingegeben, bzw. das Modul, für das man eine Checkliste anlegen möchte -->
        <label for="listname">Modul:</label>
        <select name="modul" required>
            <option value="">Bitte Wählen</option>
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_modul, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['ModulID'] . ">" . $zeile['Modul'] . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <!-- Die Kategorie wird eingegeben, bzw. die vier Säulen des Studiengangs -->
        <label for="kategorie">Kategorie:</label>
        <select name="kategorie" required>
            <option value="">Bitte Wählen</option>
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_kategorie, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorie'] . "</option>";
			} 
			?>
			
        </select>
        <br>
        <br>
		
        <!-- Insgesamt können pro Checkliste vier fällige Aufgaben eingegeben werden und das zugehörige Fälligkeitsdatum wird ausgewählt -->

        <label for="task">Aufgabe:</label>
        <input type="text" name="task" required>
        <br>
        <label for="dueDate">Fälligkeitsdatum:</label>
        <input type="date" name="datum" required>
        <br>
        <br>
    </div>
    <br>
    <br>

    <!-- Mit dem Button werden die Daten gespeichert -->

    <button type="submit" onclick="addTask ()">Aufgabe hinzufügen</button>
    </form>
    <br>
</body>
</html>