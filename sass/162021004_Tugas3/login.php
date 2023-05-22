<?php
session_start();
include('server/connection.php');

if (isset($_SESSION['logged_in'])) {
    header('location: welcome.php');
    exit;
}

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = ($_POST['user_password']);

    $query = "SELECT * FROM user
        WHERE email = ? AND user_password = ? LIMIT 1";

    $stmt_login = $conn->prepare($query);
    $stmt_login->bind_param('ss', $email, $password);

    if ($stmt_login->execute()) {
        $stmt_login->bind_result(
            $nrp,
            $nama,
            $jurusan,
            $angkatan,
            $email,
            $user_password,
            $foto
        );
        $stmt_login->store_result();

        if ($stmt_login->num_rows() == 1) {
            $stmt_login->fetch();

            $_SESSION['nrp'] = $nrp;
            $_SESSION['nama'] = $nama;
            $_SESSION['jurusan'] = $jurusan;
            $_SESSION['angkatan'] = $angkatan;
            $_SESSION['email'] = $email;
            $_SESSION['foto'] = $foto;
            $_SESSION['logged_in'] = true;

            header('location:welcome.php?message=Logged in successfully');
        } else {
            header('location:login.php?error=Could not verify your account');
        }
    } else {
        // Error
        header('location: login.php?error=Something went wrong!');
    }
}
?>


<section>

    <center>
        <div>
            <br>
            <form id="login-form" method="POST" action="login.php">
                <?php if (isset($_GET['error'])) ?>
                <div role="alert">
                    <?php if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    } ?>
                </div>
                <table class="isi">
                    <tr>
                        <th class="atas">
                            <h1 class="isi_atas">Halaman Login</h1>
                        </th>
                    </tr>


                    <tr>
                        <td>
                            <h2 class="tulis_email">Email :</h2>
                        </td>
                    </tr>
                    <tr>
                        <td> <input type="email" name="email" class="inputemail"> </td>
                    </tr>

                    <tr>
                        <td>
                            <h2 class="tulis_paswword">Password :</h2>
                        </td>
                    </tr>
                    <tr>
                        <td> <input type="password" name="user_password" class="password"> </td>
                    </tr>
                    <tr>
                        <td> <br> <input type="submit" class="site-btn" id="login-btn" name="login_btn" value="LOGIN" /> 
                        <button class="site-btn"> <a href="register.html"> Register</a></button> </td>
                         

                    </tr>

                </table>


        </div>
    </center>




</section>



<style>
    body {
        background-color: #F0F8FF;
    }

    .atas {
        background-color: #87CEFA;
        width: 400px;
        height: 50px;
        margin-top: 200px;
    }

    .inputemail {
        width: 360px;
        margin-left: 10px;
        height: 35px;
    }

    .email {
        height: 50px;
    }

    .password {
        width: 360px;
        margin-left: 10px;
        height: 35px;
    }

    .site-btn {
        width: 180px;
        height: 40px;
        margin-bottom: 15px;
        margin-top: 1px;
        margin-right: 3px;
        margin-left: 10px;
    }

    .isi {
        background-color: #E6E6FA;
    }

    .tulis_email {
        margin-left: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .tulis_paswword {
        margin-left: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .isi_atas {
        margin-top: 10px;
    }
</style>