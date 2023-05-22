<?php

session_start();
include('server/connection.php');

$id = $_POST['nrp'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$password = ($_POST['user_password']);

$query = "UPDATE user SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' , email = '$email'   WHERE nrp= '$id' ";
$result = mysqli_query($conn, $query);

header("location: login.php");
die();

?>