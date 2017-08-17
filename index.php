<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Blood Quest - Every drop counts</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<!-- jQuery library -->
	<script src="js/jquery-3.2.1.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar-landing navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" class="image-logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <div class="loginform">
    	<form action="#" method="" class="login-form">
				<li>
				<input type="text" name="username" required  autocomplete="off">
				<label for="username">Username</label>
				<input type="password" name="password" required autocomplete="off" >
				<label for="password">Password</label>
				<button class="login-button" type="submit" value="submit">Login</button>
				</li>
				<li>
				<input type="checkbox" name="remeberme"> Remember me

				<a href="#" class="forgetpassword">Forgot password?</a>

				</li>
		</form>
		</div>
		</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-md-7">
	<div class="bloodtype">
		<h1 class="bloodavailabletitle">Available blood for you.</h1>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/A-.png" alt="A-">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/A+.png" alt="A+">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/B-.png" alt="B-">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/B+.png" alt="B+">
		</div>	
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/AB-.png" alt="AB-">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/AB+.png" alt="AB+">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/O-.png" alt="O-">
		</div>
		<div class="image-bloodtype col-md-3">
			<img src="img/bloodtype/O+.png" alt="O+">
		</div>
	</div>	
	<div class="buttoncenter">
	<a href="details.php"><button class="details">Details</button></a>
	</div>						
</div>
	<div class="col-md-5 ">
		<div class="registerform">
			<h1 class="registernowtitle">Register now</h1>
			<form class="registerform">
				<input type="text" name="firstname" required autocomplete="off">
				<label for="firstname">Firstname</label>
				<input type="text" name="lastname" required autocomplete="off">
				<label for="lastname">Lastname</label>
				<br><br>
				<input type="email" name="email" required autocomplete="off">
				<label for="email">Email</label><br>
				<br>
				<div class="buttoncenter">
					<button class="login-button-register" type="submit" value="submit">Continue</button>
				</div>
				</form>
			</div>
		</div>
	</div>
  </div>
</div>
</body>
</html>