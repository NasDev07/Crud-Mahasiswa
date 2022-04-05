<?php 

    session_start(); // memulai session
    $_SESSION = []; // menghapus semua session
    session_unset(); // menghapus semua session
    session_destroy(); // menghapus semua session


    header("Location: login.php");
    exit;
?>