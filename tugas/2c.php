<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="2c.css">
</head>

<body>

    <?php

    for ($i = 10; $i >= 1; $i--) {

        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>$j</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>