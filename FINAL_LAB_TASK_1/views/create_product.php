<?php
	
	require_once('../php/sessionController.php');	

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
	<form action="../php/productController.php" method="post">
		<fieldset>
			<legend>Create New Product</legend>
			<table>
				<tr>
					<td>PRODUCT NAME</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>PRODUCT DESC</td>
					<td><input type="text" name="desc"></td>
				</tr>
				<tr>
					<td>QUANTITY</td>
					<td><input type="text" name="quantity"></td>
                </tr>
                <tr>
					<td>DATE</td>
					<td><input type="text" name="date"></td>
                </tr>
                <tr>
					<td>PRICE</td>
					<td><input type="text" name="price"></td>
                </tr>
                <tr>
					<td>STATUS</td>
					<td><input type="text" name="status"></td>
                </tr>
                <tr>
					<td>IMAGE</td>
					<td><input type="text" name="image"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create_product" value="ADD PRODUCT">
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>