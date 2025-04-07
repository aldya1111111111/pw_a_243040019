<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
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

    <p>Masukkan Angka :</p>
    <form method="post">
        <input type="number" name="angka" required min="1">
        <button type="submit">Tampilkan</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = (int)$_POST['angka'];
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                $color = ($i % 2 == 0) ? 'blue' : 'white';
                echo "<div class='box $color'>$i</div>";
            }
            echo "<br>";
        }
    }
    ?>

</body>

</html>