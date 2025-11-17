<?php
session_start();

$name="root";
$email="";
$password="";
$repeatyourpassord="";
$server="localhost";
$dbname="db";




try {
	
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>