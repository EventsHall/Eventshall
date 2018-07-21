<?php
	try{
		$conn= new PDO("mysql:host=localhost; dbname=myeventshall_db","root","");
		

		
	}
	catch(Exception $e){
		die("ERROR :".$e->getMessage());
	}
	if(isset($_POST['UserName']) && $_POST['UserName']!=""){

		 // $search =>mysqli_real_escape_string($conn, $_POST['UserName']);
		
		$req = $conn->prepare("SELECT * FROM guest_house WHERE name LIKE :UserName OR address LIKE :UserName OR area LIKE :UserName OR pincode LIKE :UserName OR city LIKE :UserName  ");


		$req->execute(array(
			'UserName'=>'%'.$_POST['UserName'].'%'
			));
	
		
		if($req->rowCount()==0){
			echo "No users was found !!!!";

		}
		else{
			 
			while ($data=$req->fetch()) {
				?>
				
				<div class="User" style="height:auto;width:100%; padding-left: 10px;">
				<span class="UserName" style="font-size: 15px;color: #000;"><h2 style="text-transform: uppercase;"><?php echo $data['name'];?></h2></span>&nbsp;<span class="Address" style="font-size: 12px;color: #888;"><?php echo $data['address'];?><br>

					<span class="Address" style="font-size: 12px;color: #888;"><?php echo $data['area'];?></span><button style="float: right; background-color:green; width:150px; color:white;font-size:20px;height:50px; padding-right:20px;">View</button><br>


					<span class="City"><?php echo $data['city'];?></span>
					<span class="PostalCode"><?php echo $data['pincode'];?></span>
					
					
					
					<hr>
					
				</div>
				
				<?php
			}
		}
	}else{
		echo "";
	}
	

?>