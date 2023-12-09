<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortschrittsbalken Beispiel</title>
    <style>
        #progress-bar {
            width: 300px;
            height: 30px;
            border: 1px solid #ccc;
            position: relative;
        }

        #progress {
            height: 100%;
            width: 0;
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

<div id="progress-bar">
    <div id="progress"></div>
</div>

<button onclick="startProgress()">Speichern</button>

<script>
    function startProgress() {
        var progressBar = document.getElementById('progress');
        var width = 0;

        function updateProgress() {
            if (width >= 100) {
                clearInterval(interval);
            } else {
                width += 10;
                progressBar.style.width = width + '%';
            }
        }

        var interval = setInterval(updateProgress, 500);
    }
</script>

</body>
</html>
