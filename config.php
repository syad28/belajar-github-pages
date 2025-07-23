<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imverse_absensi';

$conn = mysql_connect($host, $user, $pass, $db);

if (!$iconn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>