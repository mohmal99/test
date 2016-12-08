<?php 

include('Config.php');


$get_id=$_GET['user_id'];

$sql=mysql_query("UPDATE users SET Hide=1 where UserId=$get_id",$connection);
header('location:show-students.php');
?>