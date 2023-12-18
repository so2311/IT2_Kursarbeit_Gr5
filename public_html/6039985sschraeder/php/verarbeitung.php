<?php

// Verbindung zur MySQL-Datenbank herstellen
//mysqli_connect ("DB-Server (Domainname)", "Benutzername (Login)", "Kennwort", "Datenbank")

$con= mysqli_connect("m12242-39.kurs.jade-hs.de", "m12242-39", "5zvHLEaO_", "m12242-39_2");

//Daten, bestimmen aus dem Formular, die gesendet werden sollen und Query starten

if($_SERVER['REQUEST_METHOD']=='POST'){
	$kategorie=$_POST['kategorie'];
	$modul=$_POST['modul'];
	$note=$_POST['note'];
}

if ($con){
	echo "Daten wurden gespeichert";
	$sql="insert into 'Kategorie'(kategorie)value ($kategorie)";
	$sql="insert into 'Modul'(modul)value ($modul)";
	$sql="insert into 'Note'(note)value ($note)";
		
		
	$result=mysqli_query($con,$sql);
	if ($result){
		echo "Daten wurden gespeichert";
	}
}

else{
	die(mysqli_error($con));
}
	



	if (isset($_POST['ausrechnen']))
{
    $kategorie = $_POST['kategorie'];
    $modul = $_POST['modul'];
    $note = $_POST['note'];

		$stmt=$conn->prepare ("INSERT into Kategorie (kategorie) value (?)");
		$stmt=$conn->prepare ("INSERT into Modul (modul) value (?)");
		$stmt=$conn->prepare ("INSERT into Note (note) value (?)");
		$stmt->bind_param ("sss", $kategorie, $modul, $note);
        $stmt->execute();
		echo "Daten gespeichert";
		$stmt->close();
		$conn->close();

		
?>
