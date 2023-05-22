<?php
include 'server/connection.php';

$username = $_POST['nama'];
$email = $_POST['email'];
$password = ($_POST['user_password']);

$query = "INSERT into user values('','$username','','','$email','$password','')";

mysqli_query($conn,$query);

header("location: login.html");
?>
