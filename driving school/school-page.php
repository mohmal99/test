<!doctype html>
<?php session_start();
if($_SESSION['type']=="admin")
header("Location:admin-page.php");
else

 if(isset($_SESSION['id']) )

{?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

 
 if(isset($_POST['logout']))
{
	session_destroy();
	header("Location:login.php");

	
	}
	if(isset($_POST['addstudent']))
    {
	
	header("Location:add-student.php");

	
	}
	else
	if(isset($_POST['editmyschool']))
	header("Location:school-profile.php");
	
	 }else
	 {session_destroy();
		 header("Location:login.php");
		
		
		 } 
	
	?>
    <form method="post">
    <button name="logout" >logout</button>
    <button name="addstudent" >add student</button><br>
	<button name="editmyschool" >edit my school</button>
    </form>
</body>
</html>