<!DOCTYPE html>
<html>
<head>
	<title>Transportation Project</title>
	<link rel="stylesheet" type="text/css" href="styleTraspo.css">
	<link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
</head>
<body>
	<div class = "login_div">
		<a class = "a log_in" href="login.php">
			<h1 id="login"> LOGIN </h1>
		</a>
		
	</div>
	<div class = "top">
		<h2 id="title"> <img class = "logo" src="logo3.png">   ROAD INFORMATION SYSTEM </h2>
	</div>
	<div class = "body">
		<h3 id = "road_situation">Road Situation</h3>

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

		<div class ="buttons">
			<a href = "feedback.php"><button class = "button feed" type="button">Send Feedback</button></a>
			<a href = "report.php"><button class = "button feed" type="button">Send Report</button></a>
		</div>

		<h4 id = "notice">Public Notice</h4>

	</div>

	


</body>
</html>