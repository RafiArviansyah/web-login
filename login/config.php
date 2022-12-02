<?php 
 
$server = "localhost";
$user = "root";
$pass = "123456";
$database = "login";
 
$sql = mysqli_connect($server, $user, $pass, $database);
 
if (!$sql) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>

