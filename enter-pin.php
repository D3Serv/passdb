<form method="POST" action="enter-pin.php">
    <input type="text" name="pin">
     
    <input type="submit" name="enter_pin">
</form>


<?php
 
    session_start();
 
    if (isset($_POST["enter_pin"]))
    {
        $pin = $_POST["pin"];
        $user_id = $_SESSION["user"]->id;
 
        $conn = mysqli_connect("localhost", "root", "", "login");
         
        $sql = "SELECT * FROM user WHERE id = '$user_id' AND pin = '$pin'";
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) > 0)
        {
            $sql = "UPDATE user SET pin = '' WHERE id = '$user_id'";
            mysqli_query($conn, $sql);
 
            $_SESSION["user"]->is_verified = true;
            header("Location: dashboard.php");
        }
        else
        {
            echo "Wrong pin";
        }
    }
 
?>