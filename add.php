<?php
	require 'connection.php';
	if ($_SERVER["REQUEST_METHOD"]==="POST") {
		$name=$_POST['name'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];

		$conn=mysqli_connect('localhost','root','','php_crud');

		$query="INSERT INTO products(name,qty,price) VALUES ('$name','$qty','$price')";

		$result=mysqli_query($conn,$query);

		if ($result) {
			header('location: index.php');
		} 



	}
?>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		#button{
			width: 100px;
			color:blue;
			background: silver;
			border-radius: 25px;
			height: 25px;
			border:0;
		}

		.container{
			width: 250px;
			margin:15px 0 0 100px;
			float: left;
			/*background: blue;*/
			
		}
		.container a{
			color:black;
			cursor: pointer;
			/*text-decoration: none;*/
	</style>
</head>

<body>
<div class="container">
	<a href="index.php">BACK</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<div class="form-group">
			Name:
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				Quantity
				<input type="text" name="qty" class="form-control">
			
			</div>
			<div class="form-group">
			Price
				<input type="text" name="price" class="form-control">
			
			</div>
			<tr> 
				<td></td>
				<td><input type="submit" ID="button" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

