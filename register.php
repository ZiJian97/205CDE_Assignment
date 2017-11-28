<?php
	session_start(); 
	require "connection.php";

	
	if(!empty($_POST['username'])&& !empty($_POST['password']))
	{
			
			$user = $_POST['username'];	
			$pass = $_POST['password'];	
			
			
			
			
	
			$query_username = "SELECT username FROM customer_information WHERE username='$user'";
			$query_run_username = mysqli_query($conn,$query_username);


			if (mysqli_num_rows($query_run_username))
			{
				header( "refresh:0; url= register_form.php" );
				echo '<script language="javascript">';
				echo 'alert("Username already exists")';
				echo '</script>';
			}
			
			else
			{
				$sql = "INSERT INTO customer_information(username,password)VALUES ('$user', '$pass')";		
				mysqli_query($conn, $sql);
					
				header( "refresh:0; url= category.php" );
				echo '<script language="javascript">';
				echo 'alert("Account created successful")';
				echo '</script>';
				
			}
			
			
	}else
	{
				header( "refresh:0; url= index.php" );
				echo '<script language="javascript">';
				echo 'alert("Account created failed,please fill in the require information")';
				echo '</script>';
	}		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		
?>