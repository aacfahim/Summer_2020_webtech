<?php
	require_once('../php/sessionController.php');
	require_once('../service/productServices.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1>User List page</h1>

	<?php
		$products = getAllProducts();
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
		<?php for($i=0; $i != count($products); $i++ ){ ?>
			<tr>
				<td><?= $products[$i]['product_id'] ?></td>
				<td><?= $products[$i]['name'] ?></td>
				<td><?= $products[$i]['description'] ?></td>
                <td><?= $products[$i]['quantity'] ?> </td>
                <td><?= $products[$i]['date'] ?> </td>
                <td><?= $products[$i]['price'] ?> </td>
                <td><?= $products[$i]['status'] ?> </td>
                <td><?= $products[$i]['product_img'] ?> </td>
				<td>
					<a href="edit.php?id=<?=$products[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$products[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>