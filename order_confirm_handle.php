
<html>
<body>

<?php

	session_start(); 
	include('connection.php');
	

	if(!empty($_POST['user_name']) && !empty($_POST['user_address']) && !empty($_POST['user_contact']))
	{
		$res = array();
		$name = $_POST['user_name'];
		$address = $_POST['user_address'];
		$contact = $_POST['user_contact'];
		$product_id =  $_POST['product_id'];
		$product_qty = $_POST['product_qty'];

				
		$sql = "INSERT INTO order_form(customer_id,customer_name,contact_number,address,phone_id,quantity)VALUES ('" . $_SESSION['user_id'] . "', '$name', '$contact', '$address', '$product_id', '$product_qty')";		

		
		mysqli_query($conn, $sql);
					
		header( "refresh:0; url= category.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
	}
	
	
	else
	{	
			//header('location:order_confirm.php');
			header( "refresh:0; url= order_confirm.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>
</body>
</html>