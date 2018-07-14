<?php

// session_start();
//   if($_SESSION['id'] != session_id()) {
//    header('location:login.html');
//   };

$email = $_COOKIE['email'];
require 'dbconnect.php';
$db = new DbConnect();


 $output = '';

if(is_array($_FILES)){
	if(sizeof($_FILES['files']['name']) > 10){
		echo 'You can not select more than 10 files';
		exit;

	}
	foreach ($_FILES['files']['name'] as $name => $value) {
		// break image.jpg into  image and jpg in to two fields //
		$file_name = $_FILES["files"]["name"][$name];
    	$tmp_name = $_FILES["files"]['tmp_name'][$name];
		$file_array = explode('.', $_FILES['files']['name'][$name]); 
		$allow_ext = array('jpg', 'jpeg','png','gif');
		if(in_array(strtolower($file_array[1]), $allow_ext)){
			$new_name = md5(rand()).'.'.$file_array[1];
			$source_path = $_FILES['files']['tmp_name'][$name];
			$target_path = "upload/".$new_name;
			if(move_uploaded_file($source_path, $target_path)){
				   $query = "
				     INSERT INTO guestHouse_image (image_name,email) 
				     VALUES ('".$file_name."', '".$email."')
				     ";
				   $statement = $db->connect()->prepare($query);
				   $statement->execute();
				$output .= '<img src="'.$target_path.'"width="200px" height="200px"/>';
			}
		}
		# code...
	}
}
 echo $output;

?>