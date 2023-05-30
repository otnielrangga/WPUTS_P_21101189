<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nomor = $_POST['nama'];
$nama = $_POST['nim'];
$alamat = $_POST['alamat'];
$notlp= $_POST['jurusan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into t_mahasiswa values('','$nama','$nim','$alamat','$jurusan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>