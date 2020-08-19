<?php
	require_once('../php/sessionController.php');
	require_once('../service/productService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1>User List page</h1>

	<?php
		$users = getAllUser();
	?>

	<table border=1> 
		<tr>
			<td>ID</td> 
			<td>NAME</td>
			<td>DESC</td> 
			<td>QUANTITY</td>
			<td>DATE</td>
			<td>PRICE</td>
			<td>STATUS</td>
			<td>IMAGE</td>
		</tr>
		<?php for($i=0; $i != count($users); $i++ ){ ?>
			<tr>
				<td><?= $products[$i]['id'] ?></td>
				<td><?= $products[$i]['username'] ?></td>
				<td><?= $products[$i]['password'] ?></td>
				<td><?= $products[$i]['email'] ?> </td>
				<td>
					<a href="edit.php?id=<?=$products[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$products[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>