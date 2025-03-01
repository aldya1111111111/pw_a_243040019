<?php
function hitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = $luas cm².<br>";
}

function hitungKelilingLingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    echo "<hr>";
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = $keliling cm.<br>";
}


hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);
