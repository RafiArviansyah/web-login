<?php 
 
session_start();
 
/*if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}*/
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <h3>Biodata</h3>
        <ul>
            <li>Nama    : Rafi Arviansyah</li>
            <li>TTL     : Blitar 30 Maret 2005</li>
            <li>Jurusan : TKJ</li>
            <li>Kelas Industri: Sysadmin</li>
            <li>Foto Diri: <a href="fotoku.html" target="blank">Link Foto</a></li>
        </ul>
            <a href="logout.php" class="btn">Logout</a>
</body>
</html>
