<?php
function urutanAngka($angka)
{
    $num = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);
