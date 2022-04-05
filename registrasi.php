<?php 
    require 'functions.php'; // memanggil file functions.php

    if( isset($_POST["register"])) {
        if( registrasi($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'login.php';
                </script>
                ";
        }else {
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registresi</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h1>Halaman Registrasi</h1>
                            <form action="" method="POST">
                                    <label for="username">Username :</label>
                                    <input class="form-control" type="text" name="username" id="username" required>
                                    
                                    <label for="password">Password :</label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                    
                                    <label for="password2">Konfirmasi Password :</label>
                                    <input class="form-control" type="password" name="password2" id="password2" required>
                                    
                                    <br>
                                    <button class="btn" type="submit" name="register">Registrasi</button>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery.js"></script>
    <!-- Bootsrep -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>