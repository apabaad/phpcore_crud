<?php
	$id=$_GET['id'];
	include 'connection.php';
	$query="DELETE FROM products WHERE id=$id";
	mysqli_query($conn,$query);
	header('location: index.php');
?>