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

$sql="select * from schools where email='$email'";
$result=mysql_query($sql,$connection);
$row=mysql_fetch_array($result);
$name=$row[1];
$image=$row[2];
$address=$row[3];
$pnumber=$row[4];
$mnumber=$row[5];


?>
<form method="post" enctype="multipart/form-data">
<table width="308" border="1">
  <tr>
    <td width="144"><label for="textfield">School Name:</label>
      <input type="text" value="<?php echo $name; ?>" name="textfield" id="textfield"></td>
    <td width="148"><p>
      <label for="fileField">File:</label>
      <input type="file" accept="image/x-png,image/gif,image/jpeg" name="browse" id="fileField" readonly>
    </p>
      <p>
        <input type="submit" value="Upload Image" name="uploadimage"></p></td>
  </tr>
  <tr>
    <td><label for="textfield2">Address</label><input type="text" name="textfield2" value="<?php echo $address; ?>"id="textfield2"></td>
    <td><img  width="100"src="<?php echo "uploads/".$image;?>"></td>
  </tr>
  <tr>
    <td><label for="textfield3">Email</label><input type="text" name="textfield3" value="<?php echo $email; ?>" readonly id="textfield3"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for="textfield4">PhoneNumber:</label>
      <input type="text" value="<?php echo $pnumber; ?>"name="textfield4" id="textfield4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for="textfield5">MobileNumber</label><input type="text" value="<?php echo $mnumber; ?>" name="textfield5" id="textfield5"></td>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>


</form>
<?php


if(isset($_POST['uploadimage']))
{
	
$target_file = "uploads/" . basename($_FILES["browse"]["name"]);
$image=$_FILES['browse']['name'];
	if (move_uploaded_file($_FILES["browse"]["tmp_name"], $target_file)) 
	{
		        
		$sql="update schools set image='$image' where Email='$email'";
		mysql_query($sql,$connection) or die(mysql_error());
		
		echo "Loading...";
		header("Refresh: 2");
		}
		
	}



?>
</body>
</html>