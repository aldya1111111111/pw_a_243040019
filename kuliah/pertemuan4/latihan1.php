<?php

// 1. nilai awal / initial value
// 2. Kondisi terminal / Saat looping berhenti
// 3. incrument / Decrement
$i = 10;
while ($i >= 1) {
    echo "hello World $i <br>";
    $i = $i - 1;
}

echo "<hr>";
for($i = 1; $i <= 10; $i= $i + 2) {
    echo "Hello world $i <br>";
}