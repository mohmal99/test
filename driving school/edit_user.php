							
<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="school") 
{
$userdata=$_SESSION['allusers'];
$id =$_GET['user_id'];
include("config.php");
if(!in_array($id, $userdata))
	header("location:show-students.php");




?>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Edit </h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<a href="show-students.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $query=mysql_query("select * from users where UserId='$id'",$connection)or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:250px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
						<div class="col-sm-4">
						  <input type="text" name="firstname" required value="<?php echo $row['FirstName']; ?>" class="form-control" id="inputEmail3" placeholder="Firstname....." required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Father Name</label>
						<div class="col-sm-4">
						  <input type="text" name="fathername" value="<?php echo $row['FatherName']; ?>" class="form-control"  required placeholder="Father Name....." />
						</div>
						
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">GrandFather Name</label>
						<div class="col-sm-4">
						  <input type="text" name="gfathername" value="<?php echo $row['GFatherName']; ?>" class="form-control" required placeholder="GrandFather Name....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Family Name</label>
						<div class="col-sm-4">
						  <input type="text" name="familyname" value="<?php echo $row['FamilyName']; ?>" class="form-control"  required placeholder="FamilyName....."  />
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-4">
						  <input type="text" name="phonenumber" value="<?php echo $row['PhoneNo']; ?>" class="form-control" required placeholder="Phone Number....."  />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Home Number</label>
						<div class="col-sm-4">
						  <input type="text" name="homenumber" value="<?php echo $row['HomeNumber']; ?>" class="form-control"   placeholder="Home Number....."  />
						</div>
						<span style="color:red;">optional</span>
					  </div>
					   <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Troya Date</label>
						<div class="col-sm-4">
						  <input type="datetime-local" name="toryadate" value="<?php echo $row['ToryaDate']; ?>" class="form-control"   />
						</div>
												<span style="color:red;">optional</span>

					  </div>
					   <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Test Date</label>
						<div class="col-sm-4">
						  <input type="datetime-local" name="testdate" value="<?php echo $row['TestDate']; ?>" class="form-control"    />
						</div>
												<span style="color:red;">optional</span>

					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['user_id'];
if (isset($_POST['update'])) {

						$firstname=$_POST['firstname'];
						$fathername=$_POST['fathername'];
						$gfathername=$_POST['gfathername'];
						$familyname=$_POST['familyname'];
						$phonenumber=$_POST['phonenumber'];
						$homenumber=$_POST['homenumber'];
						$toryadate=$_POST['toryadate'];
						$testdate=$_POST['testdate'];

mysql_query(" UPDATE users SET FirstName='$firstname', FatherName='$fathername', GFatherName='$gfathername', FamilyName='$familyname',PhoneNo='$phonenumber',HomeNumber='$homenumber',
ToryaDate='$toryadate',TestDate='$testdate' 
WHERE UserId = '$id' ",$connection)or die(mysql_error());
echo "<script>alert('Successfully Updated User Info!'); window.location='show-students.php'</script>";


}
}else
header("location:login.php");
?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->





