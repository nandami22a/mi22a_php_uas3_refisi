<?php
     /**
     * NIM : 2257401072
     * NAMA : NANDA RIZKI NURAHYAT
     * KELAS : MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>