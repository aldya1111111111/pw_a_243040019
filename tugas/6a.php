<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
    <style>
        .box {
            text-align: center;
            display: inline-block;
            border: 1px solid black;
            width: 20px;
            height: 20px;
            line-height: 20px;
            margin: 2px;
            font-size: 15px;
        }

        .blue {
            background-color: skyblue;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>

    <?php
    $nomor = isset($_GET['nomor']) ? (int)$_GET['nomor'] : 10;
    for ($i = $nomor; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            $color = ($i % 2 == 0) ? 'blue' : 'white';
            echo "<div class='box $color'>$i</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>