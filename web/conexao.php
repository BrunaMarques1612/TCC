<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');

$servername = "localhost";
$username = "root";
$password = "";
$database = "celke";

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: " . $conn->error);

?>