<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="POST">
  <label for="textfield">First Name:</label>
  <input type="text" name="firstname"    id="textfield">
  <label for="textfield10">HomeNumber:</label>
  <input type="text"   name="homenumber" id="textfield10">
</p>
<p>
  <label for="textfield2">father Name:</label>
  <input type="text"  name="fathername" id="textfield2">
</p>
<p>
  <label for="textfield3">Grandfather:</label>
  <input type="text"    name="grandname" id="textfield3">
  <label for="textfield13">Email:</label>
  <input type="email"   name="email" id="textfield13">
</p>
<p>
  <label for="textfield4">family name:</label>
  <input type="text"   name="familyname" id="textfield4">
  <label for="textfield14">PhoneNo:</label>
  <input type="text"  name="phonenumber" id="textfield14">
</p>
<p>
  <label for="textfield5">IDN:</label>
  <input type="text"   required name="idn" id="textfield5">
  <label for="select2">Licence Type:</label>
  <select name="licencetype" id="select2">
  <?php
  $sqllicence="select * from licence";
  $resultlicence=mysql_query($sqllicence,$connection);
  while($row=mysql_fetch_array($resultlicence))
  	{
	  echo "<option>$row[1]</option>";
	  } 
  ?>
  </select>
</p>
<p>
  <label for="select">Gender</label>
  
  <select name="gender" id="select">
  <option>m</option>
  <option>f</option>
  </select>
</p>
<p>
  <label for="datetime-local">Torya-DateTime:</label>
  <input type="datetime-local" name="toryadate" id="datetime-local">
</p>
<p>
  <label for="datetime-local1">Drive Test-DateTime:</label>
  <input type="datetime-local" name="drivetestdate" id="datetime-local1">
<label>Optional</label></p>
<p>
  <label for="textfield7">DateOfBirth:</label>
  <input type="date"    name="dateofbirth" id="textfield7">
<label>Optional</label></p>
<p>
  <label for="textfield8">City:</label>
  <input type="text"   name="city" id="textfield8">
</p>
<p>
  <label for="textfield19">Street:</label>
  <input type="text" name="street" id="textfield19">
</p>
<p>
  <input type="submit" name="editstudent" id="submit" value="Submit">
  <input type="reset" name="reset" id="reset" value="Reset">
</form>


<?php 
if(isset($_POST['editstudent']))
{
	include("Config.php");
	$fname=$_POST['firstname'];
	  $fathername=$_POST['fathername'];
	  $grandname=$_POST['grandname'];
	  $family=$_POST['familyname'];
	  $idn=$_POST['idn'];
	  $gender=$_POST['gender'];
	  $dateofbirth=$_POST['dateofbirth'];
	  $city=$_POST['city'];
	  $street=$_POST['street'];
	  $homenumber=$_POST['homenumber'];
	  $email=$_POST['email'];
	  $phonenumber=$_POST['phonenumber'];
	  //$licencetype=$_POST['licencetype'];
	  $sqlidn="select * from users where idn='$idn'";
	  $resultidn=mysql_query($sqlidn,$connection);
	  $toryadate=$_POST['toryadate'];
	  $drivetestdate=$_POST['drivetestdate'];
	$sql="select * from users where idn='$idn'";
		

	$result=mysql_query($sql,$connection) or die(mysql_error());
	if($row=mysql_fetch_array($result))
	
	echo "Exist";
	else
	echo "Not Exist";
	}


?>
</body>
</html>