<?php
    session_start();
    require 'functions.php';

    if( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

     // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM mahasiswa ORDER BY id DESC"));
    // var_dump($jumlahData); // untuk melihat jumlah data
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman"); 
    // ORDER BY => ACS urut ke atas DESC mengurut kan ke bawah cara gunakan WHERE nrp = '200180020'


    // $mahasiswa = query("SELECT * FROM mahasiswa"); 
    // ORDER BY => ACS urut ke atas DESC mengurut kan ke bawah cara gunakan WHERE nrp = '200180020'

    // tombol cari ditekan
    if ( isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">

    
</head>
    <style>
        
    </style>
<body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <div class="container">
                <a class="navbar-brand" href="index.php">D E V</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link " href="logout.php">logout</a>
                    <a class="nav-link" href="data.json.php">DataJsonMhs</a>
                    <a class="nav-link" href="data.json.login.php">DataJsonLogin</a>
                </div>
                </div>
            </div>
        </nav>
        <!-- Ahkir Navbar -->

    
    <h1 class="text">Daftar Mahasiswa</h1>

    <div class="container">
        <a class="btn my-4" href="tambah.php">Tambah Data Mahasiswa</a>
        
        <form class="form" action="" method="POST">
            <input class="form" type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
            <!-- <button type="submit" name="cari" id="tombol-cari">Cari..!</button> -->
            <img class="loading" src="gambar/loading_icon.gif" alt="">
        </form>
        <br>

        <!-- Navigasi -->
        <?php if ( $halamanAktif > 1 ) : ?>
            <a class="btn" href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if( $i == $halamanAktif ) : ?>
                <a class="btn" href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
                <?php else : ?>
                    <a class="btn" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ( $halamanAktif < $jumlahHalaman ) : ?>
            <a class="btn" href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>
        <br>

        <div class="table table-responsive my-3" id="container">
            <table class="table" border="1" cellpadding="10" cellspacing="0">
                <tr class="table table-dark">
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach( $mahasiswa as $row ): ?>
                <tr class="table">
                    <td><?php echo $i; ?></td>
                    <td>
                        <a type="button" class="btn" href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                        <a type="button" class="btn" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin? data di hapus');">hapus</a>
                    </td>
                    <td>
                        <img src="gambar/<?php echo $row["gambar"]; ?>" width="50" alt="">
                    </td>
                    <td><?php echo $row["nrp"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>


    </div>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="js/jquery.js"></script>
    <!-- Bootsrep -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>