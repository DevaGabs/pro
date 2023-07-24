<?php
$serverName = "database-test1.caspk800oikc.sa-east-1.rds.amazonaws.com,1433";
$connectionOptions = array(
    "Database" => "Testeprojetoweb",
    "Uid" => "admin",
    "PWD" => "Ifrn.2023"
);

// Estabelece a conexão
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
