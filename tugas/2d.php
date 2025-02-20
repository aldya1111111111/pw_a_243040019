<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(5, 60px);
            width: 300px;
            height: 300px;
            border: 2px solid black;
        }
        .box {
            width: 60px;
            height: 60px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col < 5; $col++) {
            $color = ($row + $col) % 2 == 0 ? "white" : "black";
            echo "<div class='box $color'></div>";
        }
    }
    ?>
</div>

</body>
</html>
