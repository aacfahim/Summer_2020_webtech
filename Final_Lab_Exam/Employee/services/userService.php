<?php
	
	require_once('../db/db.php');
	
	function getByUsername($username){
		$con = DBconnect();
		$sql = "select * from employee where username ='{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	
	function getAllUser(){
		$con = DBconnect();
		$sql = "select * from employee";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;
	}

	function validate ($user){
		$con = DBconnect();
		$sql = "select * from employee where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function create($user){
		$con = DBconnect();
		$sql = "insert into employee values('{$user['name']}','{$user['company_name']}', '{$user['contact']}', '{$user['username']}', '{$user['password']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($user){
		$con = DBconnect();
		$sql = "update employee set username='{$user['username']}', password='{$user['password']}','{$user['company_name']}', contact='{$user['contact']}' where username={$user['username']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>