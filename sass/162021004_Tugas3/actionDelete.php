<?php
include "server/connection.php";

$id = $_GET['nrp'];

$query = "DELETE FROM user WHERE nrp = $id ";
mysqli_query($conn,$query);

header("location: welcome.php");
die();
?>
