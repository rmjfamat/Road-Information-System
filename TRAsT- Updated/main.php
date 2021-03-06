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
				    	center: new google.maps.LatLng(10.3000, 123.8951),
				    	zoom: 15,
					    mapTypeId: google.maps.MapTypeId.HYBRID,
					    disableDefaultUI: true
					}	
				var map = new google.maps.Map(document.getElementById("map"), mapOptions);
				var trafficLayer = new google.maps.TrafficLayer();
	   		    trafficLayer.setMap(map);
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
		<div class = "container-fluid">
		<section id="marquee">
         	<p id="clockbox" class="clock"></p>
	         <div class="notice">
         		<marquee class="text">
         			<h3 id="marq">
		           <?php

		              $f = fopen("notice.txt", "r");

		              // read line by line
		              while(!feof($f)) {
		                echo fgets($f);
		                if (!feof($f)) {
		                  echo " • ";
		                }
		              }

		              fclose($f);

		            ?>
		            <h3>
         		</marquee>
         		
         	</div>
      		</section>
      		</div>

    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
	<script type="text/javascript">
		function login() {
			// do something
		}
	</script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyATDbbwKjHhLtxNW_6_8fqKR-OJoiCuoao",
        authDomain: "trast-1520491910556.firebaseapp.com",
        databaseURL: "https://trast-1520491910556.firebaseio.com",
        projectId: "trast-1520491910556",
        storageBucket: "trast-1520491910556.appspot.com",
        messagingSenderId: "541291450311"
      };
      firebase.initializeApp(config);
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
