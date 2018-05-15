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
					<li class = "active"><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class = "container">
		<div class="wrapper">
			<form action="" method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Please Sign In</h3>
				 
				  
				  <input id="email"  class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
				  <input id="password" class="form-control" name="Password" type="Password" placeholder="Password" required=""/>
				  <input class="btn btn-lg btn-primary btn-block" value="Login" onclick="log()"/>  			
			</form>			
		</div>
	</div>
	<script type="text/javascript">
		function log() {
			var email1 = document.getElementById('email').value;
			var password1 = document.getElementById('password').value;
			console.log(email1 + " and " + password1);
			firebase.auth().signInWithEmailAndPassword(email1, password1).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  console.log("YEY");
  // ...
});
			window.location.href="admin-main.php";  // must go to the admin UI
		}
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>