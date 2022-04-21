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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script type="text/javascript" src="js/dashboard.js"></script>
</head>

<body>

  <div class="hey" id="hey">
    <?php echo "<h3>Hey, ".$_SESSION['email']."</h3>" ?>
  </div>

      <div class="container">
      <style>A {text-decoration: none;} </style>
      <aside>
        <div class="top">
        <div class="close" id="close-btn">
          <span class="material-icons md-light">close</span>
        </div>


    <div class="sidebar">

      <a href="add.php">
        <span class="material-icons md-light">control_point</span>
        <h3>New Password</h3>
      </a>

      <a href="passgen.php">
        <span class="material-icons md-light">shuffle</span>
        <h3>Random password</h3>
      </a>

      <a href="pass_str.php">
        <span class="material-icons md-light">quiz</span>
        <h3>Test your security</h3>
      </a>

      <a href="settings.php" class="active">
        <span class="material-icons md-light">person</span>
        <h3>Settings</h3>
      </a>

      <a href="logout.php" id="logout">
        <span class="material-icons md-light">logout</span>
        <h3>Logout</h3>
      </a>

    </div>

      </aside>

    <main>
      
      <h3>Dashbord</h3>

    </main>


      <div class="">
        <table class="table table-bordered table-striped" style="width:100%; border-spacing:0; box-shadow: 0px 2px 4px #888888; margin-top: 30px; padding: 10px 15px; background: white; border-radius: 10px">
          <link href="http://fonts.googleapis.com/icon?family?Material+Icons" rel="stylesheet">
          <tr><th>Name</th><th>Login ID</th><th>Password</th></th><th></th></tr>
          <?php

            retrievepass($_SESSION['email']);
          ?>
        </table>
        <div style="text-align: center;">
          <label><?php if($nopass != ""){ echo "{$nopass}"; } ?></label>
        </div>
        <div style="margin-top: 15px;">
          <button style="margin-left: 566px; width: 150px;" name="showpass" id='showpass' >Show Password</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
