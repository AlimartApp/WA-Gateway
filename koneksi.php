<?php
$koneksi = mysqli_connect("localhost","root","","alimart");

// cek koneksi

if (mysqli_connect_errno()){
    echo "koneksi gagal bro : " . mysqli_connect_error();
}


?>
