<?php session_start(); 

if(isset($_SESSION['id']) && $_SESSION['type']=="school") 

{
   
$loginid=$_SESSION['id'];
  include("Config.php"); 
include("schooldata.php");

?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>عرض الطلاب</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS RTL-->
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
     <link href="css/slide.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
   body { background: white !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</head>

<body >
    <?php include'school-nav.php'; ?>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel"> تغيير الرقم السري </h4>
			</div> <!-- /.modal-header -->
	    	<div class="modal-body">
			 <form role="form" action="POST">
			  <fieldset>
                  <div class="form-group input-group">
                    <span class="input-group-addon">
                     <i class="glyphicon glyphicon-lock"></i>
                    </span>
                   <input type="password" data-minlength="6" class="form-control" name="oldpassword" id="inputPassword" placeholder="الرقم السري القديم" required>
                 </div>
                  <div class="form-group input-group">
                      <span class="input-group-addon">
                         <i class="glyphicon glyphicon-lock"></i>
                      </span>
                    <input type="password" data-minlength="6" class="form-control" name="newpassword1"id="password" placeholder="الرقم السري الجديد" required>
                 </div>
                 <div class="form-group input-group">
                      <span class="input-group-addon">
                         <i class="glyphicon glyphicon-lock"></i>
                      </span> 
                      <input type="password" class="form-control" id="confirmPassword"   name="newpassword2"placeholder="تأكيد الرقم السري الجديد" required>
                     <div class="help-block with-errors"></div>
                 </div>
                 <div class="form-group">
                      <p class="help-block">
                      <a class="pull-right text-muted" href="#" id="olvidado"><small> هل نسيت الرقم السري؟ </small></a> </p>
                </div>
           </fieldset>
                  <div class="modal-footer">
		               <button class="form-control btn btn-primary" type="submit">تسجيل الدخول</button>
                   </div> <!-- /.modal-footer -->
	       </form>
         </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $_SESSION['schoolname'] ?><small>لتعليم السياقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="school.php"> الرئيسية </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          عرض الطلاب
				           </li>
                            
                        </ol>
                    </div>
                </div>
 <div class="row">
     <div class="col-md-12">
        <header class="jumbotron hero-spacer">
          <div class="row">
               <div class="col-md-3 col-xs-2">
               <a href="add-student.php">
              <button type="button" class="btn btn-primary"> إضافة طالب جديد </button>
              </a>
               </div>
           </div>
          <hr>
           <div class="row">
              
           
           </div>   
         <div class="panel-body">
           <div class="row">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                       <tr>
                         <th> اسم الطالب </th>
                         <th> اسم الاب</th>
                         <th> اسم الجد </th>
                         <th>  إسم العائلة </th>
                         <th> رقم الهوية </th>
                         <th> رقم الهاتف </th>
                         <th  >حذف </th>
                         <th  > تعديل </th>
                         <th  > عرض </th>
                       </tr>
                    </thead>
                    <tbody>
                    <?php 
          $sql="select * from users,schools,userschool where userschool.UserId=users.UserId
          and userschool.SchoolId=schools.SchoolId and users.hide=0";
					
					
					$usersresult=mysql_query($sql,$connection) or die(mysql_error());
					while($usersdata=mysql_fetch_array($usersresult))
				{ 
          if($usersdata['Gender']=="m")
      $usersdata['Gender']="ذكر";
      else $usersdata['Gender']="أنثى";
      $fname=$usersdata['FirstName'];
      $fathername=$usersdata['FatherName'];
      $grandname=$usersdata['GFatherName'];
      $familyname=$usersdata['FamilyName'];
      $idn=$usersdata['IDN'];
      $phonenumber=$usersdata['PhoneNo'];
      $toryadate=$usersdata['ToryaDate'];
      $testdate=$usersdata['TestDate'];
      $userid=$usersdata['UserId'];
      
      ?>
         	<tr name='row$count'>
                          <td value=''><?php echo $fname; ?></td>
                          <td><?php echo $fathername; ?></td>
                          <td><?php echo $grandname; ?></td> 
                          <td><?php echo $familyname; ?></td>
                          <td><span class='label label-info'><?php echo $idn; ?></span></td>
                         
                         

                          <td><span class='label label-warning'><?php echo $phonenumber; ?></span></td>
                          
                          <td>
                        <a class="btn btn-danger" href="#delete<?php echo $userid;?>" data-toggle="modal" data-target="#delete<?php echo $userid;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
              </a>
              <?php include('modal_delete_user.php'); ?>
</div><!-- /.modal -->

                           </a>

                            </td>
                            <td>
                            <a href="edit-student.php<?php echo "?user_id=$userid"; ?>" >
                           <button type='button' class='btn btn-primary'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                           </a>
                            <td>
                            <a href="payments.php<?php echo"?user_id=$userid"; ?>">
                           <button type='button' class='btn btn-success'><i class='fa fa-eye' aria-hidden='true'></i></button>
                             </a>
                          </div>
                         </td>
                         <td>
                            <a href="licence-application.php<?php echo"?user_id=$userid"; ?>">
                           <button type='button' class='btn btn-success'><i class='fa fa-eye' aria-hidden='true'></i></button>
                             </a>
                          </div>
                         </td>
                        </tr>


                      

					<?php }
           ?>
                        
                  </tbody>
              </table>
            </div>
           <div class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li>
					<a href="#">Prev</a>
				</li>
				<li>
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">Next</a>
				</li>
			</ul>
		</div>
      </div>
           </div>
         </div>
    </header>
        <!-- /.row -->
  <hr>
          <div class="row">
           <div class="col-md-4">
            <a class="btn btn-block btn-social btn-twitter">
            <i class="fa fa-twitter"></i>
                Follow us with Twitter</a>
            <a class="btn btn-social-icon btn-twitter">
            </a>
            </div>
            <div class="col-md-4">
            <a class="btn btn-block btn-social btn-facebook">
            <i class="fa fa-facebook"></i>
               Follow us with facebook</a>
            <a class="btn btn-social-icon btn-facebook">
            </a>
            </div>
             <div class="col-md-4">
            <a class="btn btn-block btn-social btn-instagram">
            <i class="fa fa-instagram"></i>
               Follow us with instagram</a>
            <a class="btn btn-social-icon btn-instagram">
            </a>
            </div>
            </div>
           
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>جميع الحقوق محفوظة ل Copyright © 2016</p>
                </div>
            </div>
        
        </footer>
    </div>

    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="DataTables/jq.js"></script>
    <script src="DataTables/data.js"></script>
    <script src="DataTables/boot.js"></script>

    <script>
        $(document).ready(function() {
          $('#example').DataTable();
         } );
    </script>
   <?php 
 
if(isset($_POST['changepassword']))
{
	
		if($_POST['oldpassword']==$data['password'])
		{
			$newpassword=$_POST['newpassword1'];
		$passwordsql="update login set Password='$newpassword' where LoginId=$loginid";
		mysql_query($passwordsql,$connection);
		
		}
		else 
		echo"Incorrect password";


}//change password
} else 

header("Location:login.php");


?>
</body>

</html>
