<?php 

$serverName = "RAFLIANSYAH\\SQLEXPRESS"; // Perhatikan double backslash

$connectionOptions = [
    "Database" => "Produk",
    "TrustServerCertificate" => true
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}


?>
