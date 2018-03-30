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
  	<link rel="stylesheet" href="css/report.css">
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
					<li><a href="about.php">About</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
	    <div class="row vertical-offset-100">
	    	<div class="col-md-4 col-md-offset-4">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Send your Report!</h3>
				 	</div>
				  	<div class="panel-body">
				    	<form accept-charset="UTF-8" role="form">
	                    <fieldset>
	                    	<div class="form-group">
	    		    		    <input class="form-control" placeholder="Location" name="location" type="text">
				    		</div>
				    		<div class="form-group">
	    		    		    <input class="form-control" placeholder="Time" name="time" type="text">
				    		</div>
	                        <div class="form-group">
	                            <select class="form-control" name="report_type">
	                              <option>Type of Report</option>
	                              <option>Road Repair</option>
	                              <option>Accident</option>
	                              <option>Heavy Traffic</option>
	                              <option>Others</option>
	                            </select>
				    		</div>
				    		<div class="form-group">
	                            <select class="form-control" name="reporter">
	                              <option>Reporter</option>
	                              <option>Traffic Enforcer</option>
	                              <option>Nitizen</option>
	                              <option>Police Officer</option>
	                              <option>Others</option>
	                            </select>
				    		</div>
	                        <div class="form-group">
	    		    		    <input class="form-control" placeholder="Report Details" name="details" type="text">
				    		</div>
	            
				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Send Report">
				    	</fieldset>
				      	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>