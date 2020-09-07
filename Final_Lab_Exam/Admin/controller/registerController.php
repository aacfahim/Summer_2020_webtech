<?php
	require_once('../services/userService.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$company_name = $_POST['company_name'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$contact 		= $_POST['contact'];


		if(empty($name) || empty($username) || empty($password) || empty($contact)){
			header('location: ../views/register_employer.php?error=null');
		}
		else if(!preg_match("/^[a-z A-Z]*$/",$name)){
			header('location: ../views/register_employer.php?error=name_error');

		}
		else if(!preg_match('/^[a-zA-Z0-9]{6,}$/', $username)){
			header('location: ../views/register_employer.php?error=username_error');

		}
		else if(strlen($password) <= 6){
			header('location: ../views/register_employer.php?error=password_error');
		} else{
			
			$user = [
				'name'			=>$name,
				'company_name' 	=>$company_name,
				'username'		=>$username,
				'password'		=>$password,
				'contact'		=>$contact
			];

			$status = create($user);
		
			if($status){
				header('location: ../views/dashboard.php?msg=success');
			}else{
				header('location: ../views/register_employer.php?error=dberror');
			}
		}
		
	}
?>