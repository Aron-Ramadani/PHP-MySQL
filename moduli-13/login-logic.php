<?php

	include_once('login-logic.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $repeatyourpassword = $_POST['repeat your password'];

		
        $sql = "insert into users (name, email, password ,repeat your password ) values (:name, :email, :password, :repeat your password)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':password', $password); 
        $sqlQuery->bindParam(':repeat your password', $repeatyourpassword); 



        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}
?>

