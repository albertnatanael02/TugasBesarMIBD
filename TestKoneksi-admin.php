<?php

$serverName = "100.73.166.64"; // IP Tailscale server SQL
$connectionOptions = array(
    "Database" => "master",
    "Uid" => "sa",
    "PWD" => "Admin123!",
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