<?php  
  global $nopass;
  $user_err = $nopass = "";
  require_once("controllers/dashboard_controller.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Bicicletinha - Dashboard</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dash.css" />
</head>

<body>
        <h2 style="margin-top: 20px;">Add New Password</h2>
        <form style="margin-top: 30px;" method="post">
        <div class="form_settings">
          <p><span style="font-size: 16px;">Website: </span><input type="text" name="website" placeholder="Enter Website Name" required /></p>
          <p><span style="font-size: 16px;">Login ID: </span><input type="text" name="loginid" placeholder="Enter Login ID" required /></p>
          <p><span style="font-size: 16px;">Password: </span><input type="password" name="password" placeholder="Enter Password" required /></p>
          <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Add" /></p>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
