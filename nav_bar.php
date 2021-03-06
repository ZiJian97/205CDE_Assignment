<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ABC Online Shopping</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="nav_bar.css">
		

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	
</head>

<body>


	<nav class="navbar navbar-inverse">
	
		<ul class="nav navbar-nav">
				<li><a href="category.php">Home</a></li>
				<li><a href="about_us.php">About us</a></li>
				<li><a href="contact.php">Feedback</a></li>
			</ul>
				
				

		<div class="container-fluid">
		<ul class="nav navbar-nav navbar-right">
		

<?php if (isset($_SESSION['user_id'])):?>


    <ul class="nav navbar-nav">
        <li class="dropdown">
	
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome  <?php echo $_SESSION['user_name'] ?> <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="purchase_history.php">Order History<span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="log_out.php">Log Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
    </ul>
	  
				<!--<p id="user_account" class="navbar-text">Welcome,  <?php echo $_SESSION['user_name'] ?></p>-->


<?php else:?>
				<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login_form.php?check_login=1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

<?php endif; ?>

		</ul>
		</div>
		
	</nav>
</body>
</html>
