<?php
// Example config.php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'basisdata';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("koneksi ke database gagal: " . mysqli_connect_error());
}

?>