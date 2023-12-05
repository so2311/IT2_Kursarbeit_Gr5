<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkliste</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Checkliste</h1>
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
            
            <label for="dueDate">Fälligkeitsdatum:</label>
            <input type="date" name="dueDate" required>
            <br>
	        <br>
            <button type="submit">Speichern</button>
        </form>
    </div>
</body>
</html>
