<?php 
	require 'connection.php';
	$id=$_GET['id'];
	$query=mysqli_query($connect,"DELETE FROM petugas WHERE id_petugas=$id");
	header("location:acount.php");
?>