<?php
session_start();
include('server/connection.php');


if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}


$query = "SELECT * FROM user WHERE nrp = '" . $_SESSION['nrp'] . "'";
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>


    <center>
        <table class="table" >

            <tr class="judul">
                <th>
                    <h2 class="judul">
                        EDIT PROFILE
                    </h2>
                </th>
            </tr>
            <!-- <Tr>
                <td class="judul"> <hr class="garis">  </td>
            </Tr> -->
            <form action="actionEdit.php" method="POST">
                <tr>
                    <td class="dalam">
                        <p>NRP :</p>
                        <input type="text" name="nrp" placeholder="Nama" class="form-control" value='<?php echo $_GET['nrp'] ?>' readonly>
                    </td>
                <tr>
                <tr>
                    <td class="dalam">
                        <p>Nama :</p>
                        <input type="text" name="nama" placeholder="Nama" class="form-control">
                    </td>
                <tr>
                    <td class="dalam">
                        <p>Jurusan :</p>
                        <input type="text" name="jurusan" placeholder="Jurusan" class="form-control">
                    </td>
                </tr>

                <tr>
                    <td class="dalam">
                        <p>Angkatan :</p>
                        <input type="text" name="angkatan" placeholder="Angkatan" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td class="dalam">
                        <p>Email :</p>
                        <input type="email" name="email" placeholder="Angkatan" class="form-control">
                    </td>
                </tr>

                <tr>
                    <th>
                        <br><button type="submit" class="button">Submit</button>
                    </th>
                </tr>
            </form>



        </table>
    </center>

</body>


<style>
    body {
        background-color: #F0F8FF;
    }

    table {
        background-color: #E6E6FA;
    }

    td {
        width: 250px;
    }

    p {
        margin-left: 10px;
        margin: 7px;
    }

    input {
        margin-left: 15px;
        width: 80%;
    }

    .button {
        display: inline-block;
        padding: 0.2em 1.45em;
        margin: 0.1em;
        border: 0.15em solid #CCCCCC;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Segoe UI', 'Roboto', sans-serif;
        font-weight: 400;
        color: #000000;
        background-color: #CCCCCC;
        text-align: center;
        position: relative;
        margin-top: 5px;
        bottom: 12px;
    }

    button:hover {
        border-color: #7a7a7a;
    }

    button:active {
        background-color: #999999;
    }
    .garis{
            border-width: 1px;
            border-color: black;
        }
    .judul{
        height: 20px;
        background-color: #87CEFA;
        position: relative;
    }
    input{
        height: 25px;
    }
</style>

</html>