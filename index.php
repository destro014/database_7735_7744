<?php 
require 'db.php';
session_start();
?>
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
    
    <!-- Form JavaScript-->
	<script src="js/form.js"></script>
</head>

<?php 
?>
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
    	<form action="#" method="post" class="login-form">
				<li>
				<input type="text" name="username" required  autocomplete="off">
				<label for="username">Username</label>
				<input type="password" name="password" required autocomplete="off" >
				<label for="password">Password</label>
				<button class="login-button" type="submit" value="submit" name="login">Login</button>
				</li>
				<li>
				<input type="checkbox" name="remeberme"> Remember me

				<a href="#" class="forgetpassword">Forgot password?</a>

				</li>
		</form>
	  </div>

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
		<?php //require('register.php');?>
		<div class="registerform1">
			<h1 class="registernowtitle">Register now</h1>
			<form class="registerform" id="first_form" action="index.php" method="post">
			

				<input type="text" name="firstname" required autocomplete="off">
				<label for="firstname">Firstname</label></br>
				<input type="text" name="lastname" required autocomplete="off">
				<label for="lastname">Lastname</label></br>
				<input type="email" name="email" required autocomplete="off">
				<label for="email">Email</label><br>
				<br>
				<div class="buttoncenter">
					<button class="login-button-register" type="submit" name="submit" value="submit" id="submit">Continue</button>
				</div>
			</form>
		
		</div>
		
<?php
		//create connection
			$conn = new mysqli($servername,$username,$password,$database);
			//check connection
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$firstname = $conn->real_escape_string($_POST['firstname']);
			$lastname  = $conn->real_escape_string($_POST['lastname']);
			$email     = $conn->real_escape_string($_POST['email']);
			$code      = $conn->real_escape_string( rand(1000,9999) ) ;
			// Check if user with that email already exists
			$result = $conn->query("SELECT * FROM users WHERE email='$email'") or die($conn->error());

		    	
            
			// We know user email exists if the rows returned are more than 0
		    if ( $result->num_rows > 0 ) {
		    
		    $_SESSION['message'] = 'User with this email already exists!';
		    //header("location: error.php");
            }
            else{
		    	$sql = "INSERT INTO users (firstname,lastname,email,code) VALUES('$firstname','$lastname','$email','$code')";
		    	$conn->query($sql);
            }
	        
			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'cretatechofficial@gmail.com';                 // SMTP username
			$mail->Password = 'bre@kingb@d';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			$mail->setFrom('cretatechofficial@gmail.com', 'Blood Quest');
			$mail->addAddress($email, $firstname);     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo('cretatechofficial@gmail.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Account Activation';
			$mail->Body    = 'Hello '.$firstname.',Thank you for registering. Your activation code is<strong> '.$code.'</strong>';
			$mail->AltBody = 'Hello '.$firstname.',Thank you for registering. Your activation code is '.$code ;
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    $messagesent=1;
			}        
	                      
		}
				
      
     if( isset($_POST['submit']) && $messagesent==1){?>
     <script type="text/javascript">
        $(document).ready(function(){
	    $(".registerform1").hide()
	       });
	 </script>
		  <div class="registerform2">
		  	<h1 class="registernowtitle">Check your mail </h1>
		  	<h2 class="registernowtitle">for verification code</h2>		  	
		  	<div id="form2">
			<form class="registerform" id="second_form" method="post">
				<input class="inputcode" type="text" name="verficationcode" required autocomplete="off">
				<label for="verficationcode">Enter code here</label>
				<br>
				<div class="buttoncenter">
					<button class="submit-button" type="" value="2ndsubmit" id="form-submit">Submit</button>
				</div>
			</form>	
		  </div>
		  </div>
		<?php }?>
		
	</div>
</body>
</html>