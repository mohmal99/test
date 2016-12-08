<?php 
	echo $_SESSION['password'];
		if($_POST['oldpassword']==$_SESSION['password'])
		{
			$newpassword=$_POST['newpassword1'];
		$passwordsql="update login set Password='$newpassword' where email='$email'";
		mysql_query($passwordsql,$connection);
		
		}
		else 
		echo"Incorrect password";


//change password
?>