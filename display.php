
<?php
if(isset($_GET['id'])){
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_dbname = 'myeventshall_db';



try {



$pdo= new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password); 
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     // $query="SELECT * FROM guest_house";
     // $data = $pdo->query($query);
     // echo '<table width="70%" border="1"cellpadding="5" cellspacing="5">
     // <tr>
     // 	<th>ID</th>
     // 	<th>Name</th>
     // 	<th>Gender</th>
     // 	<th>Designation</th>
     // 	</tr>';
     // 	foreach ($data as $row) {
     // 		echo'<tr>
     // 	<th>'.$row['id'].'</th>
     // 	<th>'.$row['name'].'</th>
     // 	<th>'.$row['address'].'</th>
     // 	<th>'.$row['city'].'</th>
     // 	</tr>';
     		
     // 	}
     // 	echo'</table>';
     $statement = $pdo->prepare("SELECT * FROM guest_house WHERE id =:id");
     $statement->execute(array(
     	':id' =>  $_GET['id']  

     ));
     echo '<table width="70%" border="1"cellpadding="5" cellspacing="5">
      <tr>
     	<th>ID</th>
     	<th>Name</th>
     	<th>Address</th>
     	<th>City</th>
     	</tr>';
     	foreach ($statement as $row) {
     		echo'<tr>
     	<th>'.$row['id'].'</th>
     	<th>'.$row['name'].'</th>
     	<th>'.$row['address'].'</th>
     	<th>'.$row['city'].'</th>
     	</tr>';
     		
     	}
     	echo'</table>';


} catch (PDOException $e) {
     echo $e->getMessage();
}

}
?>