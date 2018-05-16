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
  	
</head>
<body>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script>
      // Initialize Firebase
      var locationStr;
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
	<script type="text/javascript">
		firebase.auth().onAuthStateChanged(function(user) {
	  if (user) {
	    // User is signed in.
	    var displayName = user.displayName;
	    var email = user.email;
	    var emailVerified = user.emailVerified;
	    var photoURL = user.photoURL;
	    var isAnonymous = user.isAnonymous;
	    var uid = user.uid;
	    var providerData = user.providerData;
	    // ...
	  console.log(displayName + " is name");
	  } else {
	    // User is signed out.
	    // ...
	    console.log("No user.")
	  }
	});
	</script>
	<script type="text/javascript">
		var user = firebase.auth().currentUser;

if (user) {
  console.log("Naay");
} else {
  // No user is signed in.
  console.log("Waley.");
}
	</script>
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
					<li class = "active"><a href="main.php">Home</a></li>
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
				var geocoder;

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
	   		     google.maps.event.addListener(map, 'click', function(event) {
    alert("Latitude: " + event.latLng.lat() + " " + ", longitude: " + event.latLng.lng());
    var lat = event.latLng.lat();   // latitude
    var long = event.latLng.lng();   // longitude
    // enable buttons
    document.getElementById("btnSendFeedback").disabled = false;
    document.getElementById("btnSendReport").disabled = false;
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(lat, long);
				  geocoder.geocode({
				    'latLng': latlng
				  }, function (results, status) {
				    if (status === google.maps.GeocoderStatus.OK) {
				      if (results[1]) {
				        console.log(results[0].formatted_address);
				        locationStr = results[0].formatted_address;
				        document.getElementById("location").value = locationStr;
				        document.getElementById("location2").value = locationStr;
				      } else {
				        alert('No results found');
				      }
				    } else {
				      alert('Geocoder failed due to: ' + status);
				    }
				  });
  });
				  
	   			}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGKa5UD5RrSnbKy-aathS0BhlZK-T3UPI&callback=myMap" type="text/javascript"></script>
		</div>
		<div class = "row">
			<button type = "button" id = "btnSendReport" class = "btn btn-primary" data-toggle="modal" data-target="#modalSubscriptionForm2" disabled="true" >Send Report</button>
			<script>
				function myFunction1() {
			    	window.open("report.php");
				}
			</script>
			<button type = "button" id = "btnSendFeedback" class = "btn btn-primary" data-toggle="modal" data-target="#modalSubscriptionForm" disabled="true">Send Feedback</button>
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
      		<div class = "modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="row vertical-offset-100" role="document">
			    	<div class="col-md-4 col-md-offset-4">
			    		<div class="panel panel-default">
						  	<div class="panel-heading">
						  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						    		<span aria-hidden="true">&times;</span>
                				</button>
						    	<h3 class="panel-title">Send your Feedback!</h3>
						 	</div>
						  	<div class="panel-body">
						    	<form accept-charset="UTF-8" role="form">
				                    <fieldset>
				                    	<div class="form-group">
				    		    		    <input id="location" class="form-control" placeholder="Location" name="location" type="text">
							    		</div>
							    		<div class="form-group">
				    		    		    <textarea id= "message" name="message" class="feedback-input" id="comment" placeholder="Your Feedback" style="width:100%;"></textarea>
							    		</div>
			    						<input class="btn btn-lg btn-success btn-block"  value="Send Feedback" onclick="saveFeedback()">
							    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id="modalSubscriptionForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="row vertical-offset-100">
			    	<div class="col-md-4 col-md-offset-4">
			    		<div class="panel panel-default">
						  	<div class="panel-heading">
						  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						    		<span aria-hidden="true">&times;</span>
                				</button>
						    	<h3 class="panel-title">Send your Report!</h3>
						 	</div>
						  	<div class="panel-body">
						    	<form accept-charset="UTF-8" role="form">
			                    <fieldset>
			                    	<div class="form-group">
			    		    		    <input id="location2" class="form-control" placeholder="Location" name="location2" type="text" oninput="setColor('location', '#FFFFFF')">
						    		</div>
						    		<div class="form-group">
			    		    		    <input id="time" class="form-control" placeholder="Time" name="time" type="text" oninput="setColor('time', '#FFFFFF')">
						    		</div>
			                        <div class="form-group">
			                            <select id="type" class="form-control" name="report_type" oninput="setColor('type', '#FFFFFF')">
			                              <option>Type of Report</option>
			                              <option>Road Repair</option>
			                              <option>Accident</option>
			                              <option>Heavy Traffic</option>
			                              <option>Others</option>
			                            </select>
						    		</div>
						    		<div class="form-group">
			                            <select id="reporter" class="form-control" name="reporter" oninput="setColor('reporter', '#FFFFFF')">
			                              <option>Reporter</option>
			                              <option>Traffic Enforcer</option>
			                              <option>Netizen</option>
			                              <option>Police Officer</option>
			                              <option>Others</option>
			                            </select>
						    		</div>
			                        <div class="form-group">
			    		    		    <input id="details" class="form-control" placeholder="Report Details" name="details" type="text" oninput="setColor('details', '#FFFFFF')">
						    		</div>
						    		<input class="btn btn-lg btn-success btn-block" value="Send Report" onclick="saveReport()">
						    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
				</div>
			</div>

	<script type="text/javascript">
		function saveFeedback() {
			var loc = document.getElementById("location").value;
			var mes = document.getElementById("message").value;
			if (loc == "") {
				// do error checking, not only for loc but also others
			}
			var report = {loc, mes};
			var rootRef = firebase.database().ref();
			var ref = rootRef.child('feedbacks').push(report);
			console.log("Pushed daw and feedback.");
			document.getElementById("btnSendFeedback").disabled = true;
			document.getElementById("btnSendReport").disabled = true;
		}

		function saveReport() {
			var loc = document.getElementById("location").value;
			var tim = document.getElementById("time").value;
			var rep = document.getElementById("reporter").value;
			var typ = document.getElementById("type").value;
			var det = document.getElementById("details").value;
			var acceptable = true;
			if (loc == "") {
				setColor('location', '#FF0000');
				acceptable = false;
			}
			if (tim == "") {
				setColor('time', '#FF0000');
				acceptable = false;
			}
			if (rep == "Reporter") {
				setColor('reporter', '#FF0000');
				acceptable = false;
			}
			if (typ == "Type of Report") {
				setColor('type', '#FF0000');
				acceptable = false;
			}
			if (acceptable) {
				var report = {loc, tim, rep, typ, det};
				var rootRef = firebase.database().ref();
				var ref = rootRef.child('reports').push(report);
				console.log("Pushed daw");
				document.getElementById("btnSendFeedback").disabled = true;
				document.getElementById("btnSendReport").disabled = true;
			}
		}
	</script>
	<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
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