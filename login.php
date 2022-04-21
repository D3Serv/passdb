<?php 
  	$form_err = $success = $user_err = ""; 
  	include("controllers/login_controller.php");



 ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Password Manager - Login</title>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfyDzQfAAAAAHKudo1doNP9YxHb-5D29ODEyiKg"></div>
      

  
</head>

<body>
  <div class="login-card">
    <h1 style="color: blue;">PASSWORD MANAGER</h1>
    <h1>Log-in</h1><br>
    <form method="post">
    <input type="text" name="email" placeholder="E-Mail" required>
    <input type="password" name="pass" placeholder="Password" required>
    <input style="cursor: pointer;" type="submit" name="submit" class="login login-submit" value="Login">
     <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
  </form>
  </div>  
  <div class="login-help">
    <a href="register.php">Don't have an account? Register Now</a> 
  </div>
  <div class="login-help" style="margin-top: 5px;">
  	<a href="forgot.php">Forgot Password</a>
  </div>

  <div style="margin-top: 10px; text-align: center;">
	<label style="color: red; font-size: 14px;"><?php if($form_err != ""){ echo "{$form_err}"; } ?></label>	
  </div>

  <?php

    if($user_err == "1"){
    	echo "<script type='text/javascript'>alert('User or Password incorrect')</script>";
    }
    elseif($user_err == "2"){
      echo "<script type='text/javascript'>alert('User does not exist. Please register and activate your account before logging in.')</script>";
    }   

  ?>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

</body>

</html>
