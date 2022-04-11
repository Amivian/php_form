<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
	<?php 
	if (!empty($_POST)) {
		$name=$_POST['name'];
	
$gender=$_POST['gender'];
if ($gender =='female') {
	echo "<img src= 'female_avatar.png'> Welcome on Board $name";
}elseif ($gender == 'male') {
	echo "<img src = 'male_avatar.png'>  Welcome on Board $name";
}
}

 ?>

		<div class="container mt-5 ">
			<div class="row">
				<div class="col-md-6 offset-3">
					<div>
						<h2 style='background-color: powderblue; text-align: center; padding:2px; margin-top: 2px;margin-bottom: 0px'><b>Create Login</b></h2>
						<p style='text-align:center;background-color: orange; margin:0px'></p>
					</div>
					<form action="#" method="post" style="border:2px solid tan; padding:3px; background-color:tan;color:black;" class="">
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" placeholder="" class="form-control" required>
						<div class="form-group">
							<label for="address"> Email:</label>
							<input type="email" name="email" placeholder="" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input type="text" name="phone" placeholder="+234" class="form-control">
						</div>
						<div class="form-group">
							<span>Gender: </span>
							<select name='gender' id=>
								<option value="">...</option>
								<option name="female" value="female">Female</option>
								<option name="male" value="male">Male</option>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" name="add" type="submit" value="add">Register</button>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>