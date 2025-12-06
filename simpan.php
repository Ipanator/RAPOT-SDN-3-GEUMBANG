<?php
$nama  = $_POST['nama'] ?? "Pengunjung";
$waktu = date("Y-m-d H:i:s");
$ip    = $_SERVER['REMOTE_ADDR'];

$isi = "Waktu: $waktu | Nama: $nama | IP: $ip\n";

file_put_contents("simpan.txt", $isi, FILE_APPEND);

echo "Data tersimpan.";
?>
