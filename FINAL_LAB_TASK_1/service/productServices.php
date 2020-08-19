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

	function validate ($products){
		$con = dbConnection();
		$sql = "select * from users where username='{$products['username']}' and password='{$user['password']}'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function create($user){
		$con = dbConnection();
		$sql = "insert into users values('', '{$products['name']}', '{$user['desc']}', '{$user['quantity']}', '{$user['quantity']}','user')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($products){
		$con = dbConnection();
		$sql = "update users set username='{$products['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($products){
		$delete = 	$_POST['delete'];

		$con = dbConnection();
		$sql = "delete from users where id={$products['id']}";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>