<?php 
	session_start();

	function setUserData($users){
		require 'users.php';
		
		$objUser = new Users();
		$objUser->setName($users['username']);
		$objUser->setMobile($users['monumber']);
		$objUser->setEmail($users['email']);
		$objUser->setPassword(md5($users['password']));
		$objUser->setActivated(0);
		$objUser->setToken(NULL);
		$objUser->setCreated_on(date('y-m-d'));
		return $objUser;
	}

	if(isset($_POST['action']) && ($_POST['action'] == 'register')) {
		$users = validate_reg_form();
		$objUser = setUserData($users);
		$userData = $objUser->getUserByEmail();
		if($userData['email'] == $users['email'] ){
			echo "email already registered";
			exit;
		}

		

		if($objUser->saveIntoTable()){
			$lastId = $objUser->conn->lastInsertId();
			$token = sha1($lastId);
			$url = 'http://'.$_SERVER['SERVER_NAME'].'/my_project/Eventshall/verify.php?id='.$lastId.'&token='.$token;
			$html = "<div>Thanks for the registration with localhost. Please click this link to complete your registration<br>".$url."</div>";

			
			require 'phpMailer/PHPMailerAutoload.php';
			require 'phpMailer/credential.php';
			
			$mail = new PHPMailer;

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com;smtp2.example.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;              				   // SMTP username
			$mail->Password = PASSWORD;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'EventsHall');
			//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			$mail->addAddress($objUser->getEmail());               // Name is optional
			$mail->addReplyTo(EMAIL);
			
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Confirm your Email';
			$mail->Body    = $html;

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Congratulation your registration done on our site. Please verify your email';
			}
		
		}else{
			echo " data saved unsuccessful";
		}
		
	}

	//login form validation//

	if(isset($_POST['action']) && ($_POST['action'] == 'login')) {
		$users = validate_login_form();
		require 'users.php';
		$objUser = new Users();
		$objUser->setEmail($users['email']);
		$objUser->setPassword(md5($users['password']));
		$rememberMe = isset($_POST['remember-me']) ? 1 : 0 ;
		$userData = $objUser->getUserByEmail();
		if(is_array($userData) && count($userData) > 0){ 
			if($userData['password'] == $objUser->getPassword()) { 
				if($rememberMe == 1) {
					setcookie('email',$objUser->getEmail());
					setcookie('password',base64_encode($users['password']));

				}
				echo json_encode(["status" => 0, "msg" => "Login Successfull"]);

			}else{
				echo json_encode(["status" => 0, "msg" => "E-mail or password is wrong"]);

			}
		}else{
			 echo json_encode(["status" => 0, "msg" => "E-mail or password not found"]);
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

	function validate_login_form(){
		$users['email'] = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		if(false == $users['email']){
			echo json_encode(["status" => 0, "msg" => "Enter valid Email"]);
			exit;
		}

		$users['password'] = filter_input(INPUT_POST,'password' , FILTER_SANITIZE_STRING);
		if(false == $users['password']){
			echo json_encode(["status" => 0, "msg" => "Enter valid password"]);
			exit;
		}

		return $users;
	}


 ?>