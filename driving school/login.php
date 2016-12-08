<!DOCTYPE html>
<?php session_start();

if(isset($_POST['login']))
{
include("Config.php");
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from login where Email='$email' and Password='$password'";
$loginresult=mysql_query($sql,$connection );
if($row=mysql_fetch_array($loginresult))
  {
    
  if($row['Type']=='user')
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
    if($row['Type']=="school")
      {
      
      $schoolsql="select * from Schools where Email='$email'";
          $schoolresult=mysql_query($schoolsql,$connection);
          if($schoolrow=mysql_fetch_array($schoolresult))
            {
            
            $_SESSION['id']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['type']="school";
            $_SESSION['schoolname']=$schoolrow[1];
            $_SESSION['schoolid']=$schoolrow[0];

            header("Location:school.php");
            }
            
      }//if a school
      else
    if($row['Type']=="admin")
      {
      $adminsql="select * from Admin where Email='$email'";
          $adminresult=mysql_query($adminsql,$connection);
          if($adminrow=mysql_fetch_array($adminresult))
            {
            $message=$adminrow[1];
            $_SESSION['id']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['type']="admin";
            header("Location:admin-page.php");
            }
      
      }//if an admin
      else
      if($row['Type']=="health")
      {
      $healthsql="select * from healthdepartment where LoginId=$row[0]";
          $healthesult=mysql_query($healthsql,$connection);
          if($healthrow=mysql_fetch_array($healthesult))
            {
            $message=$healthrow[1];
            $_SESSION['id']=$row[0];
            $_SESSION['healthid']=$healthrow[0];
            $_SESSION['healthname']=$healthrow[1];
            $_SESSION['email']=$email;
            $_SESSION['type']="health";
            header("Location:health-main.php");
            }
      
      }//if an health
      else

if($row['Type']=="traffic")
      {
      $trafficsql="select * from trafficdepartment where LoginId=$row[0]";
          $trafficresult=mysql_query($trafficsql,$connection);
          if($trafficrow=mysql_fetch_array($trafficresult))
            {
            $message=$trafficrow[1];
            $_SESSION['id']=$row[0];
            $_SESSION['trafficid']=$trafficrow[0];
            $_SESSION['trafficname']=$trafficrow[1];
            $_SESSION['email']=$email;
            
            $_SESSION['type']="traffic";
            header("Location:traffic-main.php");
            }
      
      }//if an health


  }// main fetch array 
   else
   $message="User not found";
  

  

}//main isset of submet

?>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>تسجيل الدخول</title>
    
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
    <!-- Custom css validation -->
    <link href="css/pygments-manni.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
     <style type="text/css">
        body { background: white !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
     </style>
</head>

<body >
 <?php include 'main-pagenav.php' ?>
        <div id="page-wrapper">
         
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         إسم السيستم<small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                              <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>الرئيسية</a>
                            </li>
                            <li class="active">
                                تسجيل الدخول
                            </li>
                        </ol>
                    </div>
                </div>
        </div>   
        <div style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-primary" >
              <div class="panel-heading">
                 <div class="panel-title"> <i class="fa fa-key" aria-hidden="true"></i> تسجيل الدخول </div>
              </div>     
            <div style="padding-top:50px" class="panel-body" >
              <form role="form" method="POST" data-toggle="validator">
			    <fieldset>
                  <div class="form-group input-group">
                     <span class="input-group-addon">@</span>
                     <label for="inputEmail" class="control-label"></label>
                     <input type="email" class="form-control" name="email" id="inputEmail" placeholder="الإيميل" data-error="Bruh, that email address is invalid" required>
                  </div>
                  <div class="form-group input-group">
                     <span class="input-group-addon">
                     <i class="glyphicon glyphicon-lock"></i>
                     </span>
                     <input type="password" data-minlength="6" name="password" class="form-control" id="inputPassword" placeholder="الرقم السري" required>
                 </div>
                 <div class="form-group">
                    <p class="help-block">
                    <a class="pull-right text-muted" href="#" id="olvidado"><small> هل نسيت الرقم السري؟ </small></a> 
                    </p>
                  </div>
              </fieldset>
             <div class="row">
                <div class="col-md-4 col-md-offset-4">
		           <button class="form-control btn btn-success" name="login" type="submit"
               ><i class="fa fa-unlock" aria-hidden="true"></i> تسجيل الدخول </button>
                </div>
            </div>
         </form>   
        </div>
      </div>
    </div>
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
    <!-- Custom Js validation -->
        <script src="js/validator.min.js"></script>
        <script src="js/validator.js"></script>
        <script src="js/application.js"></script>


</body>

</html>
