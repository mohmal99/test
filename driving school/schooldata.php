<?php 
include("Config.php");

$loginid=$_SESSION['id'];
 $sql="select *,Password as password from schools,Login
 where schools.LoginId=Login.LoginId
 and Login.LoginId=$loginid";
 
$result=mysql_query($sql,$connection) or die(mysql_error());
$data=mysql_fetch_array($result)or die(mysql_error());
		
		

?>