<!doctype html>
<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
$message="";

if(isset($_POST['loginbutton']))
{
include("Config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from login where Email='$email' and Password='$password'";
$loginresult=mysql_query($sql,$connection );
if($row=mysql_fetch_array($loginresult))
	{
	if($row[3]=='user')
			{		
					$usersql="select * from Users where Email='$email'";
					
					$userresult=mysql_query($usersql,$connection);
					
					if($userrow=mysql_fetch_array($userresult))
						{
						$message=$userrow[1]." ".$userrow[2]." ".$userrow[3];
						$_SESSION['id']=$row[0];
						$_SESSION['type']="student";
						$_SESSION['email']=$email;
						header("Location:student.php");
						
						}
				
			}//if a user
		else
		if($row[3]=="school")
			{
			
			$schoolsql="select * from Schools where Email='$email'";
					$schoolresult=mysql_query($schoolsql,$connection);
					if($schoolrow=mysql_fetch_array($schoolresult))
						{
						
						$_SESSION['id']=$row[0];
						$_SESSION['email']=$email;
						$_SESSION['type']="school";
						$_SESSION['schoolname']=$schoolrow[1];
						header("Location:school.php");
						}
						
			}//if a school
			
		if($row[3]=="admin")
			{
			$adminsql="select * from Admin where Email='$email'";
					$adminresult=mysql_query($adminsql,$connection);
					if($adminrow=mysql_fetch_array($adminresult))
						{
						$message=$adminrow[1];
						$_SESSION['id']=$row[0];
						$_SESSION['type']="admin";
						header("Location:admin-page.php");
						}
			
			}//if an admin	
	}// main fetch array 
	 else
	 $message="User not found";
	

	

}//main isset of submet

?>


<h1>Main Login</h1>
<form method="post">
ID<input type="text" required autofocus name="email" placeholder="Email">      
<br />
<br />
Password<input type="password" name="password"  placeholder="Password" required><br>
<br>
<br>
<h4><?php echo $message; ?></h4>
<button type="submit"  name="loginbutton" >Login</button>
<br>
<br>
<br>

</form>
</body>
</html>