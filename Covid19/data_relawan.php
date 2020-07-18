<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","uas_novi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relawan COVID-19 > Data Relawan</title>
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
            <h2 class="mb-4 mt-3">Data Relawan COVID-19</h2>
            <a class="btn btn-primary" href="tambah_relawan.php">Tambah Relawan</a>
            <button class="btn btn-dark ml-2" href="print">Cetak Data</button>
            <h3 class="text-center mt-4">Data Relawan COVID-19 Wilayah DKI Jakarta</h3>
            <h4 class="text-center">Per <?php echo date('d-M-Y h:i:s a') ?></h4>
            <table class="table table-bordered table-striped mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Rumah</th>
                        <th>Provinsi</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <th>Keahlian</th>
                        <th colspan="2"><center>Opsi</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $jumlah = 7;
                        $page   = isset($_GET['jumlah']) ? (int)$_GET['halaman'] : 1;
                        $start  = ($page>1) ? ($page*$jumlah) - $jumlah : 0;
                        $query  = mysqli_query($conn, "SELECT * FROM tb_relawan");
                        $total  = mysqli_num_rows($query);
                        $pages  = ceil($total/$jumlah);
                        
                        $querydata = mysqli_query($conn, "SELECT * FROM tb_relawan LIMIT $start,$jumlah");
                        while($data = mysqli_fetch_assoc($querydata)) {
                    ?>
                    <tr>
                        <td><?php echo $data['id_relawan']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['provinsi']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['hp']; ?></td>
                        <td><?php echo $data['keahlian']; ?></td>
                        <td><center><button class="btn btn-outline-dark" href="edit_relawan.php?id=<?php echo $data['id_relawan']; ?>">Edit</button></center></td>
                        <td><center><a href="delete.php?id=<?php= $data['id_relawan']; ?>"><button class="btn btn-outline-dark" >Hapus</button></a></center></td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
            <div class="page">
                <ul class="pagination justify-content-center">
                    <?php for ($i=1; $i<=$pages ; $i++){ 
                        if ($i != $page) {
                    ?>
                            <li class="page-item">
                                <a class="page-link" href="data_relawan.php?=<?php echo $id; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item active">
                                <a class="page-link" href="#"><?php echo $i; ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>