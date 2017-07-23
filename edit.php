<?php
	$id=$_GET['id'];
	
	require ('connection.php');
	$query = "SELECT * FROM products WHERE id=$id";
	$result = mysqli_query($conn, $query);

	$data=mysqli_fetch_assoc($result);

	// if (isset($_POST['update'])) {
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$myid=$_POST['id'];

		$name=$_POST['name'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];

		mysqli_query($conn,"UPDATE products SET name='$name', qty='$qty', price='$price' WHERE id=$myid");
		header('location: index.php');
	}
?>
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div id="container">
	<a href="index.php">BACK</a>
	<br/><br/>

	<form action="edit.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="qty" value="<?php echo $data['qty']; ?>"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value="<?php echo $data['price'];?>"> </td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" value="update"></td>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>" >
			</tr>
		</table>
	</form>
</body>
</html>

