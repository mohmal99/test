<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<button type="submit" name="addstudent" >add new student</button>
<br>
<br>
<button type="submit" name="editstudent" >edit students</button>



</form>
<?php  
if(isset($_POST['addstudent']))
header("Location:admin-page.php");
if(isset($_POST['editstudent']))
header("Location:admin-editstudent.php");




?>
</body>
</html>