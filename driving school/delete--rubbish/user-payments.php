<!doctype html>
<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
include("Config.php");
$email=$_SESSION['email'];
$sql1="select u.UserId from users u INNER JOIN userschool l  where u.email='$email' and u.UserId='l.UserId'";
echo "test1";
//$sql="select Date,Amount,Details from payments p,login l,users u,user-school us,schools s where u.Email='$email' and u.UserId=p.UserId and us.UserId=u.UserId and us.SchoolId=s.SchoolId";
$result=mysql_query($sql1,$connection) or die(mysql_error());
echo "test2";
if($row=mysql_fetch_array($result)  or die(mysql_error()))
echo "test3";
echo $row[0]." ".$row[4];
echo $row;
?>
</body>
</html>