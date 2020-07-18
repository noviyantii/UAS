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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="data_relawan.php">Data Relawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="content">
        <div class="container">
            <h2 class="mb-4 mt-3">Form Tambah Data Relawan COVID-19</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label>Nama Relawan</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Relawan">
                </div>

                <div class="form-group">
                    <label>Alamat Rumah</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Rumah">
                </div>

                <div class="form-group">
                    <label>Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-control">
                        <option>- Pilih Provinsi -</option>
                        <option>Nanggroe Aceh Darussalam</option>
                        <option>Sumatera Utara</option>
                        <option>Sumatera Barat</option>
                        <option>Riau</option>
                        <option>Kepulauan Riau</option>
                        <option>Jambi</option>
                        <option>Bengkulu</option>
                        <option>Sumatera Selatan</option>
                        <option>Kepulauan Bangka Belitung</option>
                        <option>Lampung</option>
                        <option>Banten</option>
                        <option>DKI Jakarta</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Yogyakarta</option>
                        <option>Jawa Timur</option>
                        <option>Bali</option>
                        <option>Nusa Tenggara Barat</option>
                        <option>Nusa Tenggara Timur</option>
                        <option>Kalimantan Utara</option>
                        <option>Kalimantan Barat</option>
                        <option>Kalimantan Selatan</option>
                        <option>Kalimantan Tengah</option>
                        <option>Kalimantan Timur</option>
                        <option>Gorontalo</option>
                        <option>Sulawesi Utara</option>
                        <option>Sulawesi Barat</option>
                        <option>Sulawesi Selatan</option>
                        <option>Sulawesi Tengah</option>
                        <option>Sulawesi Tenggara</option>
                        <option>Maluku Utara</option>
                        <option>Maluku</option>
                        <option>Papua</option>
                        <option>Papua Barat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" id="email" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" name="hp" id="hp" placeholder="Masukkan Nomor Handphone" class="form-control">
                </div>

                <div class="form-group">
                    <label>Keahlian</label>
                    <input type="text" name="keahlian" id="keahlian" placeholder="Masukkan Keahlian Relawan" class="form-control">
                </div>
                <input type="submit" name="simpan" value="simpan" class="btn btn-primary mb-5 float-right">Simpan Data</button>
                <a class="btn btn-danger float-right mr-3" href="data_relawan.php">Kembali</a>
            </form>

            <?php
                if (isset($_POST['simpan'])) {
                    $nama       = $_POST['nama'];
                    $alamat     = $_POST['alamat'];
                    $provinsi   = $_POST['provinsi'];
                    $email      = $_POST['email'];
                    $hp         = $_POST['hp'];
                    $keahlian   = $_POST['keahlian'];

                    $query      = "INSERT INTO tb_relawan VALUES ('','$nama,'$alamat','$provinsi','$email','$hp','$keahlian')";
                    mysqli_query($conn, $query);
                    echo "Berhasil Disimpan";
                } else {
                    
                }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>