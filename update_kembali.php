<?php
include('database.php');

$id = mysqli_real_escape_string($database, $_POST['id']);
$code_unique = mysqli_real_escape_string($database, $_POST['code_unique']);
$tanggal_kembali = mysqli_real_escape_string($database, $_POST['tanggal_kembali']);
$status = mysqli_real_escape_string($database, $_POST['status']);

$query = "UPDATE transaksi SET tanggal_kembali='$tanggal_kembali', status='$status' WHERE id='$id'";
$result = mysqli_query($database, $query);
$querys = "UPDATE insertdata SET status='$status' WHERE code_unique = '$code_unique'";
$results = mysqli_query($database, $querys);

header("location: tabel_user.php");
