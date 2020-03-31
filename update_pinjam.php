<?php
include('database.php');

$id = mysqli_real_escape_string($database, $_POST['id']);
$code_unique = mysqli_real_escape_string($database, $_POST['code_unique']);
$nama_barang = mysqli_real_escape_string($database, $_POST['nama_barang']);
$nama_peminjam = mysqli_real_escape_string($database, $_POST['nama_peminjam']);
$tanggal_pinjam = mysqli_real_escape_string($database, $_POST['tanggal_pinjam']);
$status = mysqli_real_escape_string($database, $_POST['status']);

$query = "INSERT INTO transaksi (code_unique, nama_barang, nama_peminjam, tanggal_pinjam, status) VALUES ('$code_unique', '$nama_barang', '$nama_peminjam', '$tanggal_pinjam', '$status')";
$result = mysqli_query($database, $query);
$querys = "UPDATE insertdata SET status='$status' WHERE code_unique = '$code_unique'";
$results = mysqli_query($database, $querys);

header("location: tabel_user.php");
