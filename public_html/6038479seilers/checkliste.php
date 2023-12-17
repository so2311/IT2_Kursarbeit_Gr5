<!DOCTYPE html>
<html lang="de">
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine Checklisten</title>
<link rel="stylesheet" href="css/checkliste.css">
</head>
<body>
	<h1 style="color: black;">Deine Checklisten</h1>
	<p></p>
	<p></p>
		<div class="container1">
            <label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
            <br>
	    	<br>
			 <label for="category">Kategorie:</label>
        <select id="category">
            <option value="">Bitte wählen</option>
            <option value="1">Gestaltung</option>
            <option value="2">Technik</option>
            <option value="3">Wirtschaft</option>
            <option value="4">Journalismus</option>
        </select>
            <br>
		    <br>
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		    <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
	    	<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		    <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
			<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
	</div>
		
			<div class="container2">
		<label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
		<br>
		<br>
            <label for="category">Kategorie:</label>
        <select id="category">
            <option value="">Bitte wählen</option>
            <option value="1">Gestaltung</option>
            <option value="2">Technik</option>
            <option value="3">Wirtschaft</option>
            <option value="4">Journalismus</option>
        </select>
            <br>
		    <br>
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
				<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
			   <input type="date" name="dueDate" required>
	      </div>
          
	<div class="container3">
		<label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
		<br>
		<br>
            <label for="category">Kategorie:</label>
        <select id="category">
            <option value="">Bitte wählen</option>
            <option value="1">Gestaltung</option>
            <option value="2">Technik</option>
            <option value="3">Wirtschaft</option>
            <option value="4">Journalismus</option>
        </select>
            <br>
		    <br>
            <label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
		<br>
		<br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
            <br>
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
		<label for="task">Aufgabe:</label>
            <input type="text" name="task" required>
		<br>
            <label for="dueDate">Fälligkeitsdatum:</label>
			<input type="date" name="dueDate" required>
    </div>
	<br>
	<br>	
	
		<button type="button" onclick="addTask()">Aufgabe hinzufügen</button>
        <br>
<?php
	
	include 'fortschrittsbalken.php';
      include 'db_connect.php';
?>
</body>
</html>