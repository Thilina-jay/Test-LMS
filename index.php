<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookByte</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <style type ="text/css">
    .navbar-brand img {
        width: 40px; 
        height: auto; 
    }
    #main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 200px;
		height: 650px;
	}
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
            <a class="navbar-brand" href="signup.php">
                <img src="book.png" alt="BookByte Logo">
            </a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php">User Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php">Register</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
    <div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>What are we</h5>
			<ul>
				<li><b>BookByte</b> is an online library, offering digital access to diverse books and resources, providing convenient knowledge exploration over the internet.</li>
			
			</ul>
			<h5>What We provide?</h5>
			<ul>
				<li>Explore the expansive digital universe of Books Byte, boasting a rich collection of over 10,000+ books and 25,000+ ebooks. Immerse yourself in a vast repository for comprehensive knowledge and learning.</li>
				
			</ul>
		</div>
        <div class="col-md-8" id="main_content">
			<center><h3>User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				
				<button type="submit" class="btn btn-primary">Register</button>	
			</form>
		</div>

</body>
</html>