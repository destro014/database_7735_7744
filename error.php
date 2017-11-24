<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form">
    <br><h1 style="color: #8B0000">Error</h1><br><br>
    <p style="color: #8B0000">
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo("{$_SESSION['message']}"."<br/>");   
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p><br><br>     
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
