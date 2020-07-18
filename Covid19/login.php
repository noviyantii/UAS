<?php 
    $conn = mysqli_connect("localhost","root","","uas_novi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="login bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-5">
                    <div class="form-login text-center bg-light">
                        <form action="log.php" method="post">
                            <h3 class="text-center mb-3 mt-3">Login<h3>
                            <h6 class="mb-3 mt-3">
                                <?php 
                                    if (isset($_GET['pesan'])) {
                                        if ($_GET['pesan'] == "gagal") {
                                            echo "Username atau Password Salah";
                                        } elseif ($_GET['pesan'] == "logout") {
                                            echo "Logout Berhasil";
                                        } elseif ($_GET['pesan'] == "no-log") {
                                            echo "Anda belum Login, SIlahkan login terlebih dahulu untuk melanjutkan";
                                        }
                                    }
                                ?>
                            </h6>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" name="login" value="login" class="btn-primary mt-3 mb-3 btn-lg btn-block">Login</button>   
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>