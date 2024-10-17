<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'celke';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// if ($conexao->connect_error) {
//     echo "errao";
// } else {
//     echo "boa";
// }