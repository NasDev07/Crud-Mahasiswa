<?php 

session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php'; // memanggil file functions.php

// ambil data di URL
$id = $_GET["id"];
// var_dump($id); // untuk melihat data di URL

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs["nrp"]); // untuk melihat data mahasiswa


// cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"])) {
    // var_dump($_POST); // untuk mengecek apakah data sudah masuk atau belum
    

    // cek apakah data berhasil diubah atau tidak
    // var_dump(mysqli_affected_rows($conn)); // untuk mengecek apakah data sudah masuk atau belum
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
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
    <title>ubah data</title>
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
                            <h1>Ubah Data Mahasiswa</h1>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                                <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
                                <div class="form-group">
                                        <label for="nrp">NRP :</label>
                                        <input class="form-control" type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>">

                                        <label for="nama">Nama :</label>
                                        <input class="form-control" type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
                                    
                                        <label for="email">Email :</label>
                                        <input class="form-control" type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
                                   
                                        <label for="jurusan">Jurusan :</label>
                                        <input class="form-control" type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
                                   
                                        <label for="gambar">Gambar :</label>
                                        <img src="gambar/<?= $mhs['gambar']; ?>" width="50" alt=""> <br><br>
                                        <input class="form-control" type="file" name="gambar" id="gambar">
                                    
                                        <br>
                                        <button class="btn btn-primary" type="submit" name="submit">Ubah Data!</button>
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