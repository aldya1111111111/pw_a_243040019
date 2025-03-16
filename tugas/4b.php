<?php

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

array_push($hardware, "Card Reader", "Modem");

sort($hardware);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras Komputer</title>
</head>

<body>

    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php

        foreach (["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"] as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ol>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php
        foreach ($hardware as $item) {
            // 
            if ($item == "Card Reader" || $item == "Modem") {
                echo "<li><span>$item</span></li>";
            } else {
                echo "<li>$item</li>";
            }
        }
        ?>
    </ol>

</body>

</html>