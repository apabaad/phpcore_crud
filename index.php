<?php
require('connection.php');
$query="SELECT * FROM products";
$result=mysqli_query($conn,$query);
$count=count($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	h2{
		text-align: right;
	}

</style>
</head>
<body>
<div class="container">
<h2><a href="add.php"><i class="glyphicon glyphicon-plus"></i></a></h2>
<table class="table table-bordered table-condensed table-hover 	table-striped" >
	<tr>
		<th>SN</th>
		<th>Name</th>
		<Th>Quantity</Th>
		<th>Price</th>
		<th>Actions</th>
	</tr>
	<?php
			foreach($result as $key=> $rows){  ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['qty']; ?></td>
					<td><?php echo $rows['price']; ?></td>
					<td><a href="edit.php?id=<?php echo $rows['id']; ?> "><i class="glyphicon glyphicon-pencil"></i></a> | 
						<a href="delete.php?id=<?php echo $rows['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
					 </td>

				</tr>
			<?php } ?>
</table>
</div>
</body>
</html>