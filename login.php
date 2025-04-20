

<?php
include 'views/header.php';
?>
<div style="background: #5A5F66 ;padding: 70px; border-radius: 10px; width: 600px; margin: 0 auto; height: 50px;">

  <h2 style="text-align: center; font-size: 3.8rem; margin-bottom: 100px; font-weight: bold;">
    Log in your Account
  </h2>

<form id="loginform" action="models/login_user.php" method="POST">
    <label for="uname">Username or Email</label>
    <input type="text" name="uname" id="uname" placeholder="Username or Email" required>
    
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    
    <div class="keep-signed-in">
        <input type="checkbox" name="keep_signed_in" id="keep_signed_in">
        <label for="keep_signed_in">Keep me signed in</label>
    </div>
    
    <input type="submit" value="Login">
</form>  

<?php
include 'views/footer.php';
?>