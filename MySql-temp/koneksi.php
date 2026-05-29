<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "TugasBesarMIBD"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
