<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #progress-bar {
            width: 300px;
            height: 30px;
            border: 1px solid #ccc;
            position: relative;
        }

        #progress {
            height: 100%;
            background-color: #4caf50;
            width: 0;
            position: absolute;
        }

        #progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000;
        }
    </style>
</head>
<body>
    <div id="progress-bar">
        <div id="progress"></div>
        <div id="progress-text">0%</div>
    </div>
    <script src="update_progress.php"></script>
</body>
</html>

