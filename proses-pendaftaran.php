<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
// ambil data dari formulir
$jumlah = $_POST['jumlah'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$nama = $_POST['nama'];
// buat query
$sql = "INSERT INTO catatan (jumlah, tipe, warna, nama)
VALUE ('$jumlah', '$tipe', '$warna', '$nama')";
$query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: index.php?status=gagal');
}
} else {
    die("Akses dilarang...");
}
?>