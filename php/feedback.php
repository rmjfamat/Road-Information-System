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
  	<link rel="stylesheet" href="css/feedback.css">
  	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
					<li><a href="main.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class = "container">
		<div class="row vertical-offset-100">
	    	<div class="col-md-4 col-md-offset-4">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Send your Feedback!</h3>
				 	</div>
				  	<div class="panel-body">
				    	<form accept-charset="UTF-8" role="form">
	                    <fieldset>
	                    	<div class="form-group">
	    		    		    <input id="location" class="form-control" placeholder="Location" name="location" type="text" onclick="setColor('location', '#FFFFFF')">
				    		</div>
				    		<div class="form-group">
	    		    		    <textarea id= "message" name="message" class="feedback-input" id="comment" placeholder="Your Feedback"></textarea>
				    		</div>
    						<input class="btn btn-lg btn-success btn-block"  value="Send Feedback" onclick="saveFeedback()">
				    	</fieldset>
				      	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
	<script type="text/javascript">
		function saveFeedback() {
			var loc = document.getElementById("location").value;
			var mes = document.getElementById("message").value;
			var acceptable = true;
			if (loc == "") {
				setColor('location', '#FF0000');
				acceptable = false;
			}
			if (mes == "") {
				setColor('message', '#FF0000');
				acceptable = false;
			}
			if (acceptable) {
				var report = {loc, mes};
				var rootRef = firebase.database().ref();
				var ref = rootRef.child('feedbacks').push(report);
				console.log("Pushed daw and feedback.");
			}
		}
	</script>
	<script>
    function setColor(obj, color) {
        var property = document.getElementById(obj);
        property.style.backgroundColor = color;
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