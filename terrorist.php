<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
	<style>
		.btn{
			border-radius: 25px;
		    border-top-left-radius: 25px;
		    border-top-right-radius: 25px;
		    border-bottom-right-radius: 25px;
   		    border-bottom-left-radius: 25px;
   		    width: 70px;
   		    text-align:center;
   		    background-color: powderblue;
}
		}
	</style>
</head>
<body>

	<?php
	if (!empty($_POST)) {


$tweet = $_POST[""];
$check = $_POST[strpos($tweet, "terrorist")];

if($check !== false){
	echo  "Your tweet has been sent to your followers";
}else{
	echo "This tweet is forbidden";
}

		
	}


?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-3">
			<form action="#" method="post">
			<div><a href="#" style="text-decoration: none"><i class="fab fa-twitter mb-4"></i>
			</a>
			</div>
			<div><a href="#" style="text-decoration: none"><i class="fas fa-home mr-2 mb-4"></i> <span style="font-weight: bold; ">Home
			</span></a></div>
			<div>
				<i class="fas fa-hashtag mr-2 mb-4"></i> <span>Explore</span>
			</div>
			<div>
				<i class="far fa-bell mr-2"></i> <span>Notification</span>
			</div>
		</form>
			</div>
			<div class="col-md-9">
				<form action="#" method="post">
				<div><h6>Home</h6></div>
				<div><img src="female_avatar.png" alt="female avatar" height="50px" style="border-radius:50%" class="mr-2 mb-5"><textarea class="ml-2" type="text" value="" style="border:0px;">What's Happening</textarea>
				</div>
				<div>
					<span class="mr-5"></span>
					<button class="btn btn-primary ml-4" type="submit" style="color:white; font-weight:bold;height:30px;padding:2px">Tweet</button>
				</div>
			</form>
			</div>
		</div>
	</form>
	</div>
</body>
</html>