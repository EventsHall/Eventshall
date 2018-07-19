<?php
	try{
		$conn= new PDO("mysql:host=localhost; dbname=testing","root","");

		
	}
	catch(Exception $e){
		die("ERROR :".$e->getMessage());
	}
	if(isset($_POST['UserName']) && $_POST['UserName']!=""){

		 // $search =>mysqli_real_escape_string($conn, $_POST['UserName']);
		
		$req = $conn->prepare("SELECT * FROM tbl_customer WHERE CustomerName LIKE :UserName OR Address LIKE :UserName OR PostalCode LIKE :UserName OR City LIKE :UserName");


		$req->execute(array(
			'UserName'=>'%'.$_POST['UserName'].'%'
			));
	
		
		if($req->rowCount()==0){
			echo "No users was found !!!!";

		}
		else{
			 
			while ($data=$req->fetch()) {
				?>
				
				<div class="User" style="height:auto;width: 470px; padding-left: 10px;">

					<img src="<?php echo $_POST['image']?>"id="image">
				
				<span class="UserName" style="font-size: 15px;
	color: #000;"><h2 style="text-transform: uppercase;"><?php echo $data['CustomerName'];?></h2></span>&nbsp;<span class="Address" style="font-size: 12px;
	color: #888;"><?php echo $data['Address'];?><br>
					<span class="Address" style="font-size: 12px;
	color: #888;"><?php echo $data['Address'];?></span><button style="float: right; background-color:green; width:150px; color:white;font-size:20px;height:50px;">View</button><br>
					<span class="City"><?php echo $data['City'];?></span>
					<span class="PostalCode"><?php echo $data['PostalCode'];?></span>
					
					<hr>
					
				</div>
				
				<?php
			}
		}
	}else{
		echo "Type a frinedname";
	}
	

?>