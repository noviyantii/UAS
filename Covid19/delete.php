<?php
	session_start();
	include 'koneksi.php';
    $conn = mysqli_connect("localhost","root","","uas_novi");
	$id=$_GET['id'];
	$query="DELETE from tb_relawan where id_relawan='$id'";
	mysqli_query($conn, $query);
	header("location: data_relawan.php");
?>