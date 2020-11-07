<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletrojogos";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("A conexão não falhou! " . mysqli_connect_error());
}
?>