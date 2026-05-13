<?php
$conn = mysqli_connect("localhost", "root", "", "UTS");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>