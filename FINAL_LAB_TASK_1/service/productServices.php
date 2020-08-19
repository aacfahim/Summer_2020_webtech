<?php
	
	require_once('../db/db.php');
	
	function getById($id){
		$con = dbConnection();
		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getAllProducts(){
		$con = dbConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		$products =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row);
		};
		return $products;
	}


	function create($products){
		$con = dbConnection();
        $sql = "insert into products values('', '{$products['name']}', '{$products['desc']}', '{$products['quantity']}',
         '{$products['date']}','{$products['price']}', '{$products['status']}','{$products['image']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($products){
		$con = dbConnection();
        $sql = "update products set name='{$products['name']}', 
        desc='{$products['desc']}', quantity='{$products['quantity']}',
        date='{$products['date']}',price='{$products['price']}',status='{$products['status']}',image='{$products['image']}'
        where id={$products['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($products){
		$delete = 	$_POST['delete'];

		$con = dbConnection();
		$sql = "delete from products where id={$products['id']}";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>