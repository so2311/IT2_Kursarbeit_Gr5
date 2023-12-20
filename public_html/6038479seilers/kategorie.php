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
    $sql = "INSERT INTO Kategorien (Kategorien) VALUES ('" . $_POST["Kategorien"] . "')";

    $db_erg = mysqli_query($con, $sql);
    if (!$db_erg) {
        die('Ungültige Abfrage: ' . mysqli_error());
    }
}
?>

<body>
<h1 style="color: black;">Kategorien angeben</h1>
<p></p>
<p></p>

<form action="checkliste.php" method="post">

    <!-- Class=conatainer wurde verwendet, um die drei Checklisten zu ordnen und angemessen darstellen zu können -->

    <div class="container1">
       
        <!-- Die Kategorie wird eingegeben, bzw. die vier Säulen des Studiengangs -->
        <label for="kategorie">Kategorie:</label>
        <input type="text" name="Kategorien">
            <?php
            while ($zeile = mysqli_fetch_array($db_erg_kategorien, MYSQLI_ASSOC)) {
                echo "<option value=" . $zeile['KategorieID'] . ">" . $zeile['Kategorien'] . "</option>";
			} 
			?>
        <br>
        <br>
    </div>
    </form>
    <br>
</body>
</html>