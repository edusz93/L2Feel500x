<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Border</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        .border {
            position: absolute;
			border-radius: 15px;
            top: 50%;
            left: 50%;
            width: 640px;  /* Ajuste o tamanho da câmera */
            height: 480px; /* Ajuste o tamanho da câmera */
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border: 10px solid transparent;
            animation: borderAnimation 3s linear infinite;
        }
        @keyframes borderAnimation {
            0% {
                border-color: red;
            }
            33% {
                border-color: green;
            }
            66% {
                border-color: blue;
            }
            100% {
                border-color: red;
            }
        }
    </style>
</head>
<body>
    <div class="border"></div>
</body>
</html>