<?php 
require_once("controllers/db_controller.php");

$name = $_POST['name'];
$loginid = $_POST['loginid'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE `passwords` SET  `id`='$id' , `user`= '$user', `name`='$name',  `loginid`='$logiinid', `password`='$password' WHERE id='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>