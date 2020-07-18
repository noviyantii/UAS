<?php 
    $conn = mysqli_connect('localhost','root','','uas_novi');

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>