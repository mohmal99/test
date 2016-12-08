<?php session_start(); 

if(isset($_SESSION['email']) && $_SESSION['type']=="school") 

{include("Config.php"); 
include("schooldata.php");?>
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
    <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $data['schoolname']; ?> <small>لتعليم السياقة</small>
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
              <button type="button" class="btn btn-primary"> إضافة طالب جديد </button>
               </div>
           </div>
          <hr>
           <div class="row">
              <div class="col-md-3 col-xs-4">
                <input class="form-control" type="text" value=" بحث " id="search">
              </div>
           <div class="col-md-3 col-xs-2 col-md-offset-4">
              <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         العدد
                         <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">10</a></li>
                            <li><a href="#">20</a></li>
                            <li><a href="#">50</a></li>
                            <li><a href="#">100</a></li>
                     </ul>
                    </div>
                </div>
           </div>   
         <div class="panel-body">
           <div class="row">
            <div class="table-responsive">
                 <table class="table table-bordered table-hover table-striped">
                    <thead>
                       <tr>
                         <th> اسم الطالب </th>
                         <th> اسم الاب</th>
                         <th> اسم الجد </th>
                         <th>  إسم العائلة </th>
                         <th> رقم الهوية </th>
                         <th> الجنس </th>
                         <th> الإيميل </th>
                         <th> رقم الهاتف </th>
                         <th> تاريخ الإمتحان النظري </th>
                         <th> تاريخ الإمتحان العملي </th>
                         <th> Do </th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td><span class="label label-info">555555555555</span></td>
                          <td>6</td>
                          <td>7</td>
                          <td><span class="label label-warning">0599000000</span></td>
                          <td><span class="label label-danger">18.8.016</span></td>
                          <td><span class="label label-default">17.8.020</span></td>
                          <td>
                           <button type="button"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                           <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                           <button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>
                         </td>
                        </tr>
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
</body>
 <?php } else 
header("Location:login.php");
?>
</html>
