<?php
//initialize $name and $error variables
	$name= "";
	$error= "";
//checking if the button with name 'greet' is clicked
	if (isset($_GET['greet'])){
	  $name = $_GET['name'];
	  if (empty($name)){
		$error = "Please Provide an Input";
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Greet</title>
	<style type="text/css">
		.container{
			padding-left: 30px;
			padding-right:30px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin:25px;
			font-size: 18px;
			border-style: solid;
			border-width: 5px;
			border-color: lightblue;
			border-radius: 7px;
			margin-left: 350px;
			margin-right: 300px;
			margin-top: 5px;
			margin-bottom:10px;
		}	
		#input, p {

			align-items: center;
			font-size: 20px;
			padding:5px;
			padding-left: 20px;
			padding-right:10px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-left: 90px;
			margin-right: 210px;
			margin-top: 10px;
			margin-bottom:10px;
		}

		#btn{
			border-radius: 10px;
			background-color: green;
			padding:10px;
			font-size: 18px;
			color: white;
			margin-left: 70px;
		}	


	</style>
</head>
<body>
<div class="container">
		<?php if (!empty($name)){ ?>
			 <h1 style="background-color: lightblue; color: darkgreen">Welcome  <?php echo $name; ?></h1>

		<?php } ?>
		
		<?php
		if (!empty($error)){ ?>
			<p style="background-color: lightblue;background-size: 50px; color: red;"><?php echo $error; ?></p>
		<?php } ?>
		

	<form action="gret.php" method="get">
		<input type="text" name="name" id="input"><br/><br/>
		<button type="submit" name="greet" id="btn">Click</button> 
	</form>
</div>

</body>
</html>