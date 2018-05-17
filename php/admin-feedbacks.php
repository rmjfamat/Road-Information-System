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
  	<script src="scripts/jquery-3.1.1.min.js"></script>
    <script src="scripts/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

</head>
<body>

	<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
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
	<div class="container">
            <table id="table" class="display nowrap uk-table uk-table-hover uk-table-striped" width="100%">
                <thead>
                		<tr>
                			<th class="key">Key</th>
                      		<th class="type">Type</th>
                          	<th class="detail">Details</th>
                          	<th class="location">Location</th>
                          	<th class="action">Action</th>
                      	</tr>
                </thead>
                <tbody id="output">
                </tbody>
            </table>

        </div>
 	
	<script type="text/javascript" src="scripts/admin-feedbacks.js">
		
	</script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>