
<?php
    session_start();
?>
<!DOCTYPE html>

<html>
      <head>
         <meta charset="UTF-8">
         <title>Socmed</title>
         <link href="./res/mystyle.css" rel="stylesheet" type="text/css"/>
      </head>
    <body>
        
        <div class="navbar">
           <img src="res/logo1.png" alt="Logo" class="logo" style="width: 10%; max-width: 100px; display: block; margin: 10px; margin-left: 15px; border-radius: 10px;">
           <ul>
            <a href="./index.php">Home</a>
            <a href="./talkme.php">Talk Me</a>
            
           </ul>               
<?php 
    if(isset($_SESSION['uid'])){
?>      
            <a href="./profile.php">
<?php
    echo $_SESSION['fname']." ".$_SESSION['lname'];
?>
            </a>
            <a href="./models/logout_user.php">Logout</a>
                
<?php   
    }
    else{
       
?>
            <a href="./login.php">Login</a>
            <a href="./registration.php">Register</a>
    <?php }       

?>
                    </div>
        <