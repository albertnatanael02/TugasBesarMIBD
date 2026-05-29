<?php

$serverName = "100.73.166.65"; // IP Tailscale server SQL
$connectionOptions = array(
    "Database" => "TugasBesarMIBD-Kelompok4-Testing",
    "Uid" => "kelompok4",
    "PWD" => "123",
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "Koneksi berhasil!";
} else {
    echo "Koneksi gagal!<br>";
    die(print_r(sqlsrv_errors(), true));
}

?>