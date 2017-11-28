<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>What's Hot Online Phone Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css1.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body class = "home">
	

	<div id="container">
		<?php include('connection.php');?>
		<?php include('nav_bar.php');?>
		
		<div class="category_header">
		<div class="container-fluid">
			  <h1 class="category_header_text">Welcome to What's Hot Online Phone Shop</h1>
		</div>
		</div>
		
		<div id="category_content">
		<div class="container-fluid">
		
		<div class="row">
		
			<div class="col-sm-4"><img src="picture/Category/apple.png" class="img-rounded img-responsive" alt="image1">
				<a href="category1.php"><button type="button" class="btn btn-lg">Apple</button></a>
			</div>
			
			<div class="col-sm-4"><img src="picture/Category/samsung.png" class="img-rounded img-responsive" alt="image2">
				<a href="category2.php"><button type="button" class="btn btn-lg">Samsung</button></a>
			</div>
	
			<div  class="col-sm-4"><img src="picture/Category/sony.jpg" class="img-rounded img-responsive" alt="image3">
				<a href="category3.php"><button type="button" class="btn btn-lg">Sony</button></a>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-4"><img src="picture/Category/oppo.png" class="img-rounded img-responsive" alt="image4">
				<a href="category4.php"><button type="button" class="btn btn-lg">Oppo</button></a>
			</div>
			<div class="col-sm-4"><img src="picture/Category/huawei.png" class="img-rounded img-responsive" alt="image5">
				<a href="category5.php"><button type="button" class="btn btn-lg">Huawei</button></a>
			</div>
			<div class="col-sm-4"><img src="picture/Category/vivo.png" class="img-rounded img-responsive" alt="image6">
				<a href="category6.php"><button type="button" class="btn btn-lg">Vivo</button></a>
			</div>
		</div>
	
		</div>
		</div>
		
				</div>
		<?php include('footer.php');?>
</body>
</html>