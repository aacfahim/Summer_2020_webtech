<?php
	require_once('../service/productServices.php');

	//create new user
	if(isset($_POST['create_product'])){
		$name 	= $_POST['name'];
		$desc 	= $_POST['desc'];
		$quantity 		= $_POST['quantity'];
		$date 		= $_POST['date'];
		$price 		= $_POST['price'];
		$status 		= $_POST['status'];
		$image 		= $_POST['image'];
		if(empty($name) || empty($quantity) || empty($price) || empty($status)){
			header('location: ../views/create_product.php?error=null');
		}else{
			$products = [
				'name'=>$name,
				'desc'=>$desc,
                'quantity'=>$quantity,
                'date'	=>$date,
                'price'	=>$price,
                'status'=>$quantity,
                'image'	=>$image

                
			];
			$status = create($products);
			if($status){
				header('location: ../views/product_list.php?msg=success');
			}else{
				header('location: ../views/create_product.php?error=dberror');
			}
		}	
	}

	//edit new user
	// if(isset($_POST['update'])){
	// 	$username 	= $_POST['username'];
	// 	$password 	= $_POST['password'];
	// 	$email 		= $_POST['email'];
	// 	$id 		= $_POST['id'];

	// 	if(empty($username) || empty($password) || empty($email)){
	// 		header('location: ../views/edit.php?id='.$id);
	// 	}else{
	// 		$user = [
	// 			'username'	=>$username,
	// 			'password'	=>$password,
	// 			'email'		=>$email,
	// 			'id'		=>$id

	// 		];

	// 		$status = update($user);
	// 		if($status){
	// 			header('location: ../views/user_list.php?msg=success');
	// 		}else{
	// 			header('location: ../views/edit.php?id='.$id);
	// 		}
	// 	}	
	// }

	// //delete user
	// if(isset($_POST['yes_delete'])){
	// 	$username 	= $_POST['username'];
	// 	$password 	= $_POST['password'];
	// 	$email 		= $_POST['email'];
	// 	$id 		= $_POST['id'];
		

	// 	if(empty($username) || empty($password) || empty($email)){
	// 		header('location: ../views/edit.php?id='.$id);
	// 	}else{
	// 		$user = [
	// 			'username'	=>$username,
	// 			'password'	=>$password,
	// 			'email'		=>$email,
	// 			'id'		=>$id

	// 		];

	// 		$status = delete($user);
	// 		if($status){
	// 			header('location: ../views/user_list.php?msg=success');
	// 		}else{
	// 			header('location: ../views/edit.php?id='.$id);
	// 		}
	// 	}	
	// }else if(isset($_POST['yes_delete'])){
	// 	header('location: ../views/user_list.php');

	// 	}
?>