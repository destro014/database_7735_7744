<?php
$servername="localhost";
$username="destro014";//username k xa tyo rakha
$password="killingthemic";//afno password rakha
$database="";

$conn= new mysqli($servername,$username,$password);

$sql="CREATE DATABASE IF NOT EXISTS blood";

if($conn->query($sql)==true){
  $database= "blood";
}
else{
  echo "Database not created.".$conn->error;
}

//create connection
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
	//echo "Connection Failed:".connect_error;
}
//create database
$sql = "CREATE TABLE IF NOT EXISTS users(
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
