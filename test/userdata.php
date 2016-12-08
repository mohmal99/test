<?php 

include("Config.php");
$email=$_SESSION['email'];

 $sql="select users.FirstName as firstname,schools.SchoolName as schoolname,users.ToryaDate as
  toryadate,users.TestDate as testdate 
  from users 
  join schools
 join userschool on userschool.SchoolId=schools.SchoolId
   and users.UserId=userschool.UserId
  where users.email='$email'";
  

$result=mysql_query($sql,$connection) or die(mysql_error());
$data=mysql_fetch_array($result)or die(mysql_error());

?>