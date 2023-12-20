<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$con = mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");


if (isset($_POST['ausrechnen'])) {
    $kategorie = $_POST['kategorie'];
    $modul = $_POST['modul'];
    $note = $_POST['note'];

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

    <!-- javascript verlinkung-->
    <script src="notenberechnerjavascript.js"></script>


    <!-- Bootstrap Einbindung -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- responsive Design mit bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">

    <header>

        <h1>Notenberechner</h1>
         <img src="../../bilder/Notenberechner%20header.png" alt="Header">
    </header>

    <nav>
       
    <?php
    //Navigation für den Frontend Bereich

     $navigation = ["index.php" => " Start ", 
				"6039985sschraeder/notenberechner.php" => " Notenberechner ", 
				"6038479seilers/checkliste.php" => " Checkliste ",
			  "6040337adueser/notizmanager.php" => " Notizmanager ",
			  "ergebnisse.php" => " Ergebnisse "];
        echo "<ul>";
        foreach ($navigation as $nav => $titel){
	    echo "<li><a href='$nav' class='titel'>$titel</a></li>";
        }
        echo "</ul>"
    ?>

    </nav>

    <main>


        <body>

        <p>Hier kannst du alle deine Noten am Ende des Semesters eintragen, um deinen derzeitigen Notendurchschnitt zu
            berechnen. Wähle dafür einfach die passende Kategorie, das jeweilige Modul und deine Note in den
            Dropdownmenüs aus und klicke auf "Ausrechnen". </p>
        <br>

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
                <option value="2.0">2.0</option>
                <option value="3.0">3.0</option>
            </select>
            <br>
			

            <!---Bootstrap Button Ausrechnen--->
            <button type="submit" name="ausrechnen" class="btn btn-danger">Ausrechnen</button>

        </form>
        <br>
        <?php
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

        <!---Bootstrap Button Ergebnisse der zu den Auswertungen führt--->
        <p><a href="ergebnisse.php" class="btn btn-danger">Ergebnisse</a></p>

    </main>

    <side>
        <p>Ausgabe Noten</p>
		
		<?php
        if (isset($_SESSION['kategorie']) && isset($_SESSION['modul']) && isset($_SESSION['note'])) {
        echo $_SESSION['kategorie'] . ", " . $_SESSION['modul'] . ", " . $_SESSION['note'];
        }
?>
		
    </side>


</div>
</body>
</html>