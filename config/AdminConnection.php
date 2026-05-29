<?php

$serverName = "100.91.30.118"; // IP Tailscale SQL Server

$connectionOptions = array(
    "Database" => "TugasBesarMIBD",
    "Uid" => "sa",
    "PWD" => "Admin123!",
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

?>  