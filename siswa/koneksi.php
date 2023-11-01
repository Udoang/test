<?php
$koneksi= mysqli_connect("localhost","root","","siswa_smk",);
// Cek koneksi
if (mysqli_connect_errno()){
echo "Koneksidatabase gagal: " . mysqli_connect_error();
}
?>