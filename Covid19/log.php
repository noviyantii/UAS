<?php 
    session_start();

    $conn = mysqli_connect("localhost","root","","uas_novi");

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND pass = '$password'");
    $data = mysqli_fetch_assoc($query);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['pass'] = $password;
        $_SESSION['nama'] = $data['nama'];

        header('location:index.php');
    } else {
        header('location:login.php?pesan=gagal');
    }
?>