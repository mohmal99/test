<?php session_start(); 

if(isset($_SESSION['email']) && $_SESSION['type']=="student") 

{ include("userdata.php");?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>صفحة الطالب</title>
    
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
<form method="post"  >
 <div class="container-fluid">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-default " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">إسم السيستم</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"> <a href="#"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o" aria-hidden="true"></i> أسئلة التِؤريا <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-car" aria-hidden="true"></i> أسئلة تؤريا خصوصي </a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-truck" aria-hidden="true"></i>  أسئلة تؤريا شحن خفيف </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bus" aria-hidden="true"></i> أسئلة تؤريا عمومي </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bicycle" aria-hidden="true"></i> أسئلة تؤريا دراجة نارية </a>                       
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o" aria-hidden="true"></i><i class="fa fa-circle-o fa-lg" aria-hidden="true"></i> أسْلة تؤريا تراكتور </a>
                        </li>
                    </ul>
                </li>
                 
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-suitcase" aria-hidden="true"></i> دراسة التوريا <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i> إشارات المرور </a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> كتاب التؤريا </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> فيديو </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="badge" style=" background:red;">1</span><b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                           <a href="#"> 
                            <?php if($data['testdate']=="0000-00-00 00:00:00") echo "غير محدد"; 
							else 
							echo $data['testdate'];?>
                            <span class="label label-danger"> التست  </span></a>
                           <a href="#"> 
                            <?php  if($data['toryadate']=="0000-00-00 00:00:00") echo "غير محدد"; 
						   else echo $data['toryadate'];?>
                            <span class="label label-success"> التؤوريا  </span></a>

                        </li>
                    </ul>
                      <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php  echo $data[0];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> موعد الامتحان </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> تغيير الرقم السري</a>
                            
                        </li>
                        <li class="divider"></li>
                        <li >
                            <a href="logout.php"><i  class="fa fa-fw fa-power-off"></i> تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> إتصل بنا </a>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
    </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
    
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <?php echo $data[1]; ?> <small>لتعليم السياقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home" aria-hidden="true"></i> الرئيسية
                            </li>
                        </ol>
                    </div>
                </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <div class="container-fluid">
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
       <img src="images/1.jpg">
        <div class="carousel-caption">
          <h1 > نحن نوصلك إلى هدفك بسرعة أكبر </h1>
       </div>
     </div>

    <div class="item">
      <img src="images/1.jpg" >
      <div class="carousel-caption">
          <h1 style="color:green;"> <?php echo $data[1]; ?></h1> <h3> لتعليم السياقة طريقك إلى التميز والنجاح</h3>
      </div>
    </div>

    <div class="item">
      <img src="images/1.jpg">
      <div class="carousel-caption">
            <h2> نحن نجعل دراسة التوريا امر أسهل</h2>
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
  </div>
</div>


        <hr>

        <!-- Title -->
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">  معنا  <small> بلا حدود </small> </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <div class="col-md-3 col-xs-6">
                <div class="thumbnail">
                    <img src="images/2.jpg" style="width:380px;height:190px" alt="">
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="thumbnail">
                    <img src="images/6.jpg" style="width:380px;height:190px" alt="">
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="thumbnail">
                    <img src="images/5.jpg" style="width:380px;height:190px" alt="">
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="thumbnail">
                    <img src="images/4.jpg" style="width:380px;height:190px" alt="">
                </div>
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
    </form>
<?php } else 
header("Location:login.php")?>
</body>

</html>
