<?php session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="health") 
{                 include('config.php');
$healthdepartmentid=$_SESSION['healthid'];
$healthdepartmentname= $_SESSION['healthname'];


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>الصفحة الرئيسية</title>
    
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
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
     <style type="text/css">
      body { 
          background: white !important;
          max-width: 100%;
          padding-right: 0;
          padding-left: 0;
      } 

    </style>
</head>
<body >
       <div class="container-fluid">
            <?php include 'health-nav.html';?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           صحة <small><?php echo $healthdepartmentname;?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home" aria-hidden="true"></i> الرئيسية
                            </li>
                        </ol>
                    </div>
                </div>
	           <div class="row">
            	<div class="col-md-12">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                    <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                   </ol>
                    <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
                      <div class="item active">
                         <img src="images/7.jpg">
                      </div>
                      <div class="item">
                         <img src="images/8.jpg" >
                      </div>
                      <div class="item">
                         <img src="images/9.jpg">
                     </div>
                </div>
             </div> 
           <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
     </div>
    </div>
    <hr>
 <div class="row text-center">
    <div class="col-md-2 col-md-offset-2">
        <img src="images/10.jpg"  class="img-circle" class="img-responsive" width="250" height="250" alt="">
    </div>
    <div class="col-md-2">
        <img src="images/11.jpg" class="img-circle" class="img-responsive"  width="250" height="250" alt="">
    </div>
    <div class="col-md-2">
         <img src="images/12.jpg" class="img-circle" class="img-responsive" width="250" height="250" alt="">
     </div>
 </div>
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

</body>

</html>
<?php }else header("Location:login.php");?>