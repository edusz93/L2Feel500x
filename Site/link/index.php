<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Text</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
        }
        .text {
            font-size: 48px;
            font-weight: bold;
            color: #FFD700;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.9), 0 0 30px rgba(255, 215, 0, 0.9);
            animation: textGlow 1.5s ease-in-out infinite, textBounce 2s ease-in-out infinite, textZoom 3s ease-in-out infinite;
        }
        @keyframes textGlow {
            0% {
                text-shadow: 0 0 15px rgba(255, 215, 0, 0.9), 0 0 30px rgba(255, 215, 0, 0.9);
            }
            50% {
                text-shadow: 0 0 30px rgba(255, 215, 0, 1), 0 0 60px rgba(255, 215, 0, 1);
            }
            100% {
                text-shadow: 0 0 15px rgba(255, 215, 0, 0.9), 0 0 30px rgba(255, 215, 0, 0.9);
            }
        }
        @keyframes textBounce {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes textZoom {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="text">L2ignis.com</div>
</body>
</html>
