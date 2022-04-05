<?php
    // buka koneksi ke mysql db
    $conn = mysqli_connect("localhost", "root", "", "app_mhs") or die("Error " . mysqli_error($conn));

    // ambil baris tabel dari mysql db
    $sql = "select * from mahasiswa";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    // create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($conn);
?>