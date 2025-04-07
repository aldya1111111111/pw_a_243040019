<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            background-color: lightgray;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            overflow: hidden;
            max-width: 28rem;
            margin: auto;
        }

        .image-container {
            position: relative;
        }

        .image {
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay-text {
            color: white;
            font-size: 2.25rem;
            font-weight: 700;
        }

        .content {
            padding: 1.5rem;
        }

        .text {
            color: black;
            text-align: center;
            margin-bottom: 1rem;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .button {
            background-color: red;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .button:hover {
            background-color: red;
        }

        .button:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.5);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="OIP.jpg" class="image">
            <div class="overlay">
                <h1 class="overlay-text"></h1>
            </div>
        </div>
        <div class="content">
            <p class="text">Welcome to unpas</p>
            <div class="button-container">
                <form action="" method="$_POST">
                    <button class="button" name="logout" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>