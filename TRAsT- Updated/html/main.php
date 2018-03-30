<!DOCTYPE html>
<html>
<head>
	<title>Tranportation Project</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/sample.css">
  	<link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
  	<link rel="stylesheet" href="css/faqstyle.css">
</head>
<body>
	<nav class= "navbar navbar-default navbar-fixed-top">
		<div class = "container-fluid">

			<button type = "button" class = "navbar-toggle"
				data-toggle = "collapse"
				data-target = ".navbar=collapse"> 
				<span class = "sr-only">Toggle navigation</span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			
			<a class = "navbar-brand" href = "companyInfo.php"><img class = "logo" src="logo3.png" style="display: inline-block;"> ROAD INFORMATION SYSTEM </a>
			<div class  = "navbar-collapse collapse">
				<ul class = "nav navbar-nav navbar-right">
					<li class = "active"><a href="home.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class = "container">
		<div class = "row">
			<h1>Road Situation</h1>
		</div>
		<div class = "row">
			<input class = "search" type="text" placeholder="Search location..">
			
			<div id="map"></div>

				<script>
				function myMap() {
				var mapOptions = {
				    center: new google.maps.LatLng(10.3338, 123.8941),
				    zoom: 10,
				    mapTypeId: google.maps.MapTypeId.HYBRID
				}
				var map = new google.maps.Map(document.getElementById("map"), mapOptions);
				}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGKa5UD5RrSnbKy-aathS0BhlZK-T3UPI&callback=myMap" type="text/javascript"></script>
		</div>
		<div class = "row">
			<button type = "button" id = "btn1" class = "btn btn-primary" onclick = "myFunction1()">Send Report</button>
			<script>
				function myFunction1() {
			    	window.open("report.php");
				}
			</script>
			<button type = "button" id = "btn2" class = "btn btn-primary" onclick = "myFunction2()">Send Feedback</button>
			<script>
				function myFunction2() {
			    	window.open("feedback.php");
				}
			</script>


		</div>
		<div class = "row">
			<h2>Public Notice</h2>
		</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>