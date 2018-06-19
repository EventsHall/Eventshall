<?php 

	if(isset($_POST['action']) && ($_POST['action'] == 'register')) {
		$users = validate_reg_form();
		require 'users.php';
		$objUser = new Users();
		$objUser->setName($users['username']);
		$objUser->setMobile($users['monumber']);
		$objUser->setEmail($users['email']);
		$objUser->setPassword(md5($users['password']));
		$objUser->setActivated(0);
		$objUser->setToken(NULL);
		$objUser->setCreated_on(date('y-m-d'));

		if($objUser->saveIntoTable()){
			echo "data saved successfully";
		}else{
			echo " data saved unsuccessful";
		}
		
	}

	function validate_reg_form(){
		$users['username'] = filter_input(INPUT_POST,'username' ,FILTER_SANITIZE_STRING);
		if(false == $users['username']){
			echo "Enter valid name";
			exit;
		}

		$users['monumber'] = filter_input(INPUT_POST,'mobile_number' , FILTER_SANITIZE_NUMBER_INT);
		if(false == $users['monumber']){
			echo "Enter valid Mobile Number";
			exit;
		}

		$users['email'] = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		if(false == $users['email']){
			echo "Enter valid email";
			exit;
		}

		$users['password'] = filter_input(INPUT_POST,'password' , FILTER_SANITIZE_STRING);
		if(false == $users['password']){
			echo "Enter valid password";
			exit;
		}

		$users['cpassword'] = filter_input(INPUT_POST,'confirm_password' , FILTER_SANITIZE_STRING);
		if(false == $users['cpassword']){
			echo "Enter valid confirme password";
			exit;
		}
		if($users['password'] != $users['cpassword']){
			echo "password not matched";
			exit;
		}

		return $users;
	}

 ?>