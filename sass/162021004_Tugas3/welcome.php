<?php
session_start();
include('server/connection.php');


if (isset($_POST['cari'])){
    $keyword = $_POST['keyword'];
    $q ="SELECT * FROM user WHERE nrp LIKE '%$keyword%'";
} else {
    $q ='SELECT * FROM user';
}

$result = mysqli_query($conn,$q);

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}
if (!isset($_SESSION['logged_in'])) {
    header('location: actionEdit.php');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        header('location: login.php');
        exit;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>
        <br>
    <table class="table" >
        <tr>
            <th colspan="4" class="atas"> <h1>Selamat Datang <?php echo $_SESSION['nama'] ?> </h1></th>
        </tr>
        
        <tr>
        <td rowspan="5"> <img src="gambar/<?php echo $_SESSION['foto'] ?> " width="150px" height="150px" class="gambar"> </td>
  
        </tr>
        
        <tr>
            <td colspan="4"> <h3>Email :  <?php echo $_SESSION['email'] ?>  </h3> </td>
        </tr>
        <tr>
            <td colspan="4"> <h3>NRP :  <?php echo $_SESSION['nrp'] ?>  </h3> </td>
        </tr>
        <tr>
        <td colspan="4"> <h3>Jurusan : <?php echo $_SESSION['jurusan'] ?>  </h3> </td>
        </tr>
        <tr>
        <td colspan="4"> <h3>Angkatan : <?php echo $_SESSION['angkatan'] ?>  </h3> </td>
        </tr>
        <tr>
            <td colspan="4"> <hr class="garis"> </td>
        </tr>
        <tr>
            <th colspan="4" class="daftartabel"> Daftar Akun </th>
        </tr>
        <tr class="jarak" ></tr>
            <tr>
                <th scope="col"class="nrp">NRP</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            
            <?php while($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <td align="center" class="nrp"><?php echo $row['nrp']; ?> </td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a href="actionDelete.php?nrp=<?php echo $row['nrp']; ?>"role="button" onclick="return confirm('Data ini akan dihapus?')">Hapus</a> 
                <a class="text-secondary" href="editProfile.php?nrp=<?= $row['nrp']; ?>">Edit</a> </td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4"> <hr class="garis"> </td>
        </tr>
                
    </table>

    <br>
    
   
   <button class="t_logout" > <a href="welcome.php?logout=1" id="logout-btn" class="btn btn-danger">LOG OUT</a> </button>

   <br><br>
   
    </center>






    <style>
        body {
            background-color: #F0F8FF;
        }

        table{
            background-color: #E6E6FA;
        
        }

        .atas{
            width: 500px;
            background-color: #87CEFA;
        }

        .gambar{
            margin-left: 10px;
        }

        .t_logout{
            width: 300px;
            height: 50px;
        }
        .garis{
            border-width: 1px;
            border-color: black;
        }
        .daftartabel{
            font-size: 35px;
        }
        .nrp{
            width: 100px;
        }
        .jarak{
            height: 10px;
        }

    </style>

</body>
</html>
