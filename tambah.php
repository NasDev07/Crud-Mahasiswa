<?php 

session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php'; // memanggil file functions.php
    // koneksi ke DBMS
    $conn = mysqli_connect("localhost", "root", "", "app_mhs");


// cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"])) {
    // var_dump($_POST); // untuk mengecek apakah data sudah masuk atau belum
    // var_dump($_FILES);
    //  die; // untuk menghentikan program
    

    // cek apakah data berhasil ditambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn)); // untuk mengecek apakah data sudah masuk atau belum
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'tambah.php';
            </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamah data</title>

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
                            <h3 class="my-4">Tambah Data Mahasiswa</h3>
                            <form class="requires-validation" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group"> 
                                    <label for="nrp">NRP :</label>
                                    <input class="form-control" size="30" type="text" name="nrp" id="nrp" required>
                                        
                                    <label for="nama">Nama :</label>
                                    <input class="form-control" size="30" type="text" name="nama" id="nama" required>
                                    
                                    <label for="email">Email :</label>
                                    <input class="form-control" size="30" type="text" name="email" id="email" required>
                                        
                                    <label for="jurusan">Jurusan :</label>
                                    <input class="form-control" size="30" type="text" name="jurusan" id="jurusan" required>
                                    
                                    <label for="gambar">Gambar :</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar">
                                        
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
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