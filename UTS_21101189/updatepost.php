<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nidn = $_POST['nim'];
$alamat = $_POST['alamat'];
$nohp = $_POST['jurusan'];

 
// update data ke database
mysqli_query($koneksi,"update t_mahasiswa set nama='$nama',nim='$nim',alamat='$alamat',jurusan='$jurusan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>