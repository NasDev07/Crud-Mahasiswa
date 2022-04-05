<?php
    session_start();
    if( isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require 'functions.php'; // memanggil file functions.php

    if( isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // cek username
        if( mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                //set session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Css -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                        <?php if(isset($error)) : ?>
                            <p style="color: red; font-style: italic;">Username / Password salah</p>
                        <?php endif; ?>
                            <h2>Halaman Login</h2>
                            <form action="" method="POST">
                                <label for="username">Username :</label>
                                <input class="form-control" type="text" name="username" id="username" required>
                                
                                <label for="password">Password :</label>
                                <input class="form-control" type="password" name="password" id="password" required>
                                
                                <br>
                                <button class="btn" type="submit" name="login">Login</button>    
                            </form>
                            <a href="./registrasi.php">
                                <button class="btn" name="register">Register</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootsrep -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>