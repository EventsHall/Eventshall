<?php 
	// this Script run only first time to create db and table //
	
	$host = "localhost";
	$user = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($host, $user, $password);
	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	// Create database
	$sql = "CREATE DATABASE myeventshall_db";
	if (mysqli_query($conn, $sql)) {
    	echo "Database created successfully";
	} else {
    	echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_select_db($conn, 'myeventshall_db');
	 
	 // sql to create table

	$table = "CREATE TABLE users (
		id INT(6) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
		name VARCHAR(50) NOT NULL,
		mobile BIGINT(10) NOT NULL,
		email VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL,
		activated TINYINT(2) default 0 NOT NULL,
		token VARCHAR(100) NULL,
		created_on TIMESTAMP
	)";

	if (mysqli_query($conn, $table)) {
		echo "Table users created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	 
?>