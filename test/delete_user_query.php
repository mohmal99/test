<?php 

include('Config.php');

$studentsarray=array();
$studentsarray=$_SESSION['studentsarray'];
if(in_array($id,$studentsarray))
{
$get_id=$_GET['user_id'];

$sql=mysql_query("UPDATE users SET Hide=1 where UserId=$get_id",$connection);
header('location:show-students.php');
}
else
header('location:show-students.php');
?>