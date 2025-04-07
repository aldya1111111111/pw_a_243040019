<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "Jurusan" => "Teknik Informatika",
        "Email" => "sandhikagalih@unpas.ac.id"
    ],

    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "Jurusan" => "Teknik Industri",
        "Email" => "doddy@yahoo.com"
    ],

    [
        "nama" => "Aldi Adriansyah",
        "nrp" => "243040019",
        "Jurusan" => "Teknik Informaika",
        "Email" => "aldy@gmail.com",
    ],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>