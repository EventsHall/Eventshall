<?php 
	require 'users.php';

class GuestHouse
{

	protected $id;
	protected $name;
	protected $address;
	protected $area;
	protected $pincode;
	protected $city;
	protected $state;
	protected $url;
	protected $info;
	protected $email;
	public $conn;

	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }
	function setName($name) { $this->name = $name; }
	function getName() { return $this->name; }
	function setAddress($address) { $this->address = $address; }
	function getAddress() { return $this->address; }
	function setArea($area) { $this->area = $area; }
	function getArea() { return $this->area; }
	function setPincode($pincode) { $this->pincode = $pincode; }
	function getPincode() { return $this->pincode; }
	function setCity($city) { $this->city = $city; }
	function getCity() { return $this->city; }
	function setState($state) { $this->state = $state; }
	function getState() { return $this->state; }
	function setUrl($url) { $this->url = $url; }
	function getUrl() { return $this->url; }
	function setInfo($info) { $this->info = $info; }
	function getInfo() { return $this->info; }
	function setEmail($email) { $this->email = $email; }
	function getEmail() { return $this->email; }


	function __construct()
	{
		require 'dbconnect.php';
		$db = new DbConnect();
		$this->conn = $db->connect();
	}

	function saveIntoTable(){
		$sql = "INSERT INTO `guest_house`(`id`, `name`, `address`, `area`, `pincode`, `city`, `state`, `url`,`info`, `email`) VALUES (null, :name, :address, :area, :pincode, :city, :state, :url, :info, :email)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':name',$this->name);
		$stmt->bindParam(':address',$this->address);
		$stmt->bindParam(':area',$this->area);
		$stmt->bindParam(':pincode',$this->pincode);
		$stmt->bindParam(':city',$this->city);
		$stmt->bindParam(':state',$this->state);
		$stmt->bindParam(':url',$this->url);
		$stmt->bindParam(':info',$this->info);
		$stmt->bindParam(':email',$this->email);
		

		try {
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}
			
		} catch (Exception $e) {
			echo $e->getMessage();
			
		}

	}

	function getUserByEmail(){
		//echo $objUser->getEmail();
		$stmt=$this->conn->prepare("SELECT * FROM guest_house where email = :email");
		echo $this->email;
		$stmt->bindParam(':email',$this->email);
		try {
			if($stmt->execute()){
				$user = $stmt->fetch(PDO::FETCH_ASSOC);
				}
			}
		catch(Exception $e) {
				echo $e->getMessage();
			}
			return $user;
		}


}




 ?>