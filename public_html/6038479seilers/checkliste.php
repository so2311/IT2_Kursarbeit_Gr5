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
$con= mysqli_connect("m12242-08.kurs.jade-hs.de", "m12242-08", "cwAH6n59E","m12242-08_2");

if (!empty($_POST)) {
    var_dump($_POST);
    $sql = "INSERT INTO Aufgaben (Module, Kategorien, Aufgaben, Datum) VALUES ('" . $_POST["Module"] . "','" . $_POST["Kategorien"] . "', '" . $_POST["Aufgaben"] . "', '" . $_POST["Datum"] . "')";

    $db_erg = mysqli_query($con, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
} else {

	$sql = "SELECT * FROM Aufgaben JOIN Kategorien ON Aufgaben.Kategorien = Kategorien.KategorieID JOIN Module ON Aufgaben.Module = Module.ModuleID ORDER BY AufgabenID DESC LIMIT 10 ";

$db_erg = mysqli_query($con, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ' . mysqli_error());
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
        <label for="Module">Modul:</label>
        <select name="Module" required>
            <option value="">Bitte Wählen</option>
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_module, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['ModulID'] . ">" . $zeile['Module'] . "</option>";
            }
	?>
        </select>
        <br>
        <br>
        <!-- Die Kategorie wird eingegeben, bzw. die vier Säulen des Studiengangs -->
        <label for="Kategorien">Kategorie:</label>
        <select name="Kategorien" required>
            <option value="">Bitte Wählen</option>
			<?php
                  while ($zeile = mysqli_fetch_array($db_erg_kategorien, MYSQLI_ASSOC))
                  echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorien'] . "</option>";
}
             ?>
        </select>
        <br>
        <br>
		
        <!-- Die fällige Aufgabe kann eingegeben werden und das zugehörige Fälligkeitsdatum wird ausgewählt -->

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