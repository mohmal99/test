<?php session_start(); 

if(isset($_SESSION['email']) && $_SESSION['type']=="admin") 

{include("Config.php"); 
include("admin-data.php");?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>إضافة مدرسة</title>

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
   .center{
          width: 150px;
          margin: 40px auto;}
</style>
</head>

<body >
   <?php include 'admin-nav.php'; ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            إدارة<small> مدارس السواقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="admin-page.php"> الرئيسية </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          إضافة مدرسة
				           </li>
                            
                        </ol>
                    </div>
                </div>
 <div class="row">
     <div class="col-md-12">
        <header class="jumbotron hero-spacer">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        <h4><spam><i class="fa fa-plus" aria-hidden="true"></i> إضافة مدرسة </spam></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="row">
                                 <div class="col-md-6 col-md-offset-3">
                              <form data-toggle="validator" role="form" method="POST">
                                <div class="form-group ">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" name="schoolname" id="" placeholder=" إسم المدرسة " required>
                                   </div>
                                </div>
                               <div class="form-group">
                                   <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                       <input type="text" class="form-control" name="managername" id="" placeholder="  إسم صاحب المدرسة  " required>
                                  </div>
                               </div>
                               <div class="form-group">
                                <div class="form-inline row">
                                  <div class="form-group col-sm-6">
                                      <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" name="phonenumber"id="" placeholder=" رقم الهاتف " required>
                                      </div>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" name="mobilenumber" id="" placeholder=" رقم الجوال " required>
                                      </div>
                                  </div>
                                </div>
                               </div>
                                <div class="form-group ">
                                      <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" name="address" id="" placeholder=" العنوان" required>
                                      </div>
                                  </div>
                                <div class="form-group ">
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                   <input type="email" class="form-control" id="inputEmail" name="email" placeholder=" البريد الالكتروني " data-error="Bruh, that email address is invalid" required>
                                  </div>
                               </div>
                               
                               <div class="form-group">
                                 <div class="form-inline row">
                                    <div class="form-group col-md-6">
                                      <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                         <select type="text" name="governorate" class="form-control" id="" placeholder=" المحافظة" required>
                                         <?php $governoratesql="select * from governorate";
                                         $governorateresult=mysql_query($governoratesql,$connection)or die(mysql_query());
                                         while($governoraterow=mysql_fetch_array($governorateresult))
                                          {?>
                                         <option><?php echo $governoraterow['GovernorateName']; ?></option>
                                        <?php } ?>
                                         </select>
                                        
                                      </div>
                                   </div>
                                  </div>
                               </div>
                          <div class="form-inline row">
                           <div class="form-group col-md-4 col-md-offset-5">
                               <button type="submit" name="add" class="btn btn-primary"><h5><i class="fa fa-plus-square" aria-hidden="true"></i> إضافة</h5> </button>
                           </div>
                          </div>
                  </form>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  </div>
              </div>
             </div>
          </div>
         </div>
      </div>
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
 </div>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   
</body>
</html>
<?php } else 
header("Location:login.php");
if(isset($_POST['add']))
{
$name=$_POST['schoolname'];
$managername=$_POST['managername'];
$phonenumber=$_POST['phonenumber'];
$mobilenumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$governorate=1;
              include("RandomPasswordGenerator.php");
        $password=generateRandomString();

$sql="insert into schools (SchoolName,ManagerName,GovernorateId,Address,Email,PhoneNumber,MobileNumber) values
('$name','$managername',$governorate,'$address','$email','$phonenumber','$mobilenumber')";
mysql_query($sql,$connection) or die(mysql_error());
$sql2="insert into login (Email,Password,Type) values ('$email','$password','school')";
mysql_query($sql2,$connection) or die(mysql_error());



}




?>