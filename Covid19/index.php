<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","uas_novi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Website Relawan Covid-19</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <div class="title mt-3">
                <h1>Website Relawan COVID-19</h1>
                <h5 class="mt-3 mb-4">Selamat datang, <?php echo $_SESSION['username'];  ?>.</h5>
            </div>
        </div>
    </div>

    <nav class="nav mt-2">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_relawan.php">Data Relawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="content">
        <div class="container">
            <h2 class="mb-4 mt-5">Selamat datang Di Website Relawan COVID-19!</h2>
            <h5>Website Relawan Covid-19 sebagai pendataan relawan yang telah terdaftar.
                Silahkan untuk mengakses dan mengelola data relawan covid-19</h5>
        </div>
    </div>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>