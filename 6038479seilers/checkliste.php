<!DOCTYPE html>
<html lang="de">
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine Checklisten</title>

</head>
	<style>
		/*für die Ästhetik wird style.css verwendet*/
}	
	body {
     display: grid; 
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
    color: white;

    } 
	
	.container1, .container2, .container3 {
      box-sizing: border-box;
      width: 100%;
    }
    .container1 {
      background-color: #ff0000;
      padding: 10px;
    }

    .container2 {
      background-color: #ee0000;
      padding: 10px;
    }

    .container3 {
      background-color: #cd0000;
      padding: 10px;
    }
</style>
<body>
	<h1 style="color: black;">Deine Checklisten</h1>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
		<div class="container1">
            <label for="listname">Name der Checkliste:</label>
            <input type="text" name="listName" required>
            <br>
	    	<br>
            <label for="category">Kategorie:</label>
            <input type="text" name="category" required>
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
            <input type="text" name="category" required>
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
            <input type="text" name="category" required>
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

<?php
include 'fortschrittsbalken.php';
?>
	<button type="submit">Speichern</button>
</body>
</html>