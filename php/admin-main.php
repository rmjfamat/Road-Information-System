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
  	<link rel="stylesheet" href="css/login.css">
  	
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

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
					<li class = "active"><a href="admin-main.php">View Reports and Feedbacks</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<table class="table">
          <thead>
              <tr>
                  <th class="status">Feedbacks</th>
                  <th class="busCompany">Location</th>
                  <!-- <th class="busNumber">Bus Number</th> -->
                  <th class="accommodation">Message</th>
              </tr>
          </thead>
          <tbody id="output">
          </tbody>
        </table>
	<script type="text/javascript" src="scripts/admin-feedbacks.js">
		
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>