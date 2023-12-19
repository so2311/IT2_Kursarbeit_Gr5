<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/fortschrittsbalken.css">
	
	<style>
    #progress-bar-container {
      width: 50%;
      margin: 20px auto;
      background-color: #f0f0f0;
      border-radius: 5px;
      overflow: hidden;
    }

    #progress-bar {
      width: 0;
      height: 30px;
      background-color: #4caf50;
      transition: width 0.3s ease-in-out;
    }

    input[type="text"] {
      margin: 10px 0;
      padding: 5px;
    }
  </style>
	
</head>
<body>

<div id="progress-bar-container">
  <div id="progress-bar"></div>
</div>
	
	<script>
  function updateProgressBar() {
    const form = document.getElementById('form');
    const inputs = form.getElementsByTagName('input');
    const progressBar = document.getElementById('progress-bar');

    let filledFields = 0;

    // Zählen Sie die ausgefüllten Felder
    for (let i = 0; i < inputs.length; i++) {
      if (inputs[i].value.trim() !== '') {
        filledFields++;
      }
    }

    // Berechnen Sie den Fortschritt in Prozent
    const progress = (filledFields / inputs.length) * 100;

    // Aktualisieren Sie die Breite des Fortschrittsbalkens
    progressBar.style.width = progress + '%';
  }
</script>
	
	</body>
	</html>