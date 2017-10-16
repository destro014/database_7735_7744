<?php
$servername="localhost";
$username="root";
$password="greenland";
$database="blood";

//create connection
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
	//echo "Connection Failed:".connect_error;
}
//create database
$sql = "CREATE TABLE users(
                          id INT(6) AUTO_INCREMENT PRIMARY KEY,
                          firstname VARCHAR(50) NOT NULL,
                          lastname VARCHAR(50) NOT NULL,
                          email VARCHAR(25) NOT NULL,
                          reg_time TIMESTAMP)";
if($conn->query($sql)==true){
	echo "";
}
else{
	echo "Error Occured".$conn->error;
}
$conn->close();                          
?>
