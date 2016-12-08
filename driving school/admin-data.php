<?php 

include("Config.php");
$email=$_SESSION['email'];
 $sql="select AdminName as name,password from admin
 join login on login.email='$email'
  where admin.email='$email'";
$result=mysql_query($sql,$connection) or die(mysql_error());
$data=mysql_fetch_array($result)or die(mysql_error());
		
		

?>