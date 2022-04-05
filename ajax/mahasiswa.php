<?php 

    sleep(1); // sleep 1 detik

    require '../functions.php';

    $keyword = $_GET["keyword"];


    $query =  "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    $mahasiswa = query($query);

    // var_dump($mahasiswa);

?>

<div class="container">
    <div class="table table-responsive my-3">
        <table class="table" border="1" cellpadding="10" cellspacing="0">
                <tr>
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
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                        <a class="btn" href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                        <a class="btn" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin? data di hapus');">hapus</a>
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