<?php
$servername = "36.88.175.58";
$database = "web_lanjut";
$username = "web";
$password = "@123WebLanjut";

// untuk tulisan bercetak tebal silahkan sesuaikan dengan detail database anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
//mengecek koneksi
if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
//echo "koneksi berhasil";
//mysql_close($conn);