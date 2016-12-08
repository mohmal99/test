
<?php session_start(); 

if(isset($_SESSION['id']) && $_SESSION['type']=="school") 

{
$loginid=$_SESSION['id'];
  include("Config.php"); 
include("schooldata.php");

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>طلب الرخصة</title>

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
 body { 
          background: white !important;
          max-width: 100%;
          padding-right: 0;
          padding-left: 0;
      } 
  .center{
     text-align: center;
  }
  pp { display: inline;}
  under {text-decoration: underline;}
</style>
</head>

<body >
    <div class="container-fluid">
         <!-- Navigation -->
     <?php include'school-nav.php'; ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          طلب<small> الرخصة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="#"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          طلب الرخصة
				           </li>
                            
                        </ol>
                    </div>
                </div>
               <div class="row">
                 <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <h4><spam><i class="fa fa-file-text" aria-hidden="true"></i> طلب الرخصة </spam></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="row">
		                     <div class="col-md-4">
                              <form class="form">
                                 <h2>دولة فلـــــســــــطين</h2>
                                 <h3>وزارة النقل والمواصلات</h3>
		                     </div>
		                     <div class="col-md-4">
                               <center>
			                      <img  alt="Bootstrap Image Preview" src="images/neserna.png" class="default" />
                                    <h1> <strong>طلب رخصة </strong></h1>
                                    <h1><strong>لسوق مركبة ميكانيكية</strong> </h1>
                               </center>
		                     </div>
		                     <div class="col-md-4">
                                 <h2>الإدارة العامة لسلطة الترخيص</h2>
	                    	 </div>
                    	  </div>
                          <div class="row">
                             <div class="col-md-10">
                              <h4> إلى إدارة الترخيص في - المحافظة </h4>
                              <h4> أنا المذكور أدناه أطلب بهذا رخصة سياقة لمركبة ميكانيكية من نوع - نوع المركبة </h4>
                              <h4> وبحوزتي رخصة سياقة رقم -الرقم من نوع-النوع </h4>
                             </div>
                          </div>
  <div class="row">
		<div class="col-md-8">
      <div class="table-responsive">
			<table class="table table-condensed table-bordered " >
				<thead>
          <tr class="bg-primary"><th colspan="4" class="center"><strong> تفاصيل مقدم الطلب </strong></th></tr>
					<tr >
						<th>الإسم الشخصي</th>
						<th>إسم الأب</th>
						<th>إسم الجد</th>
						<th>إسم العائلة</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>علاء</td>
                        <td>علاء</td>
                        <td>علاء</td>
                        <td>علاء</td> 	
					</tr>	
                </tbody>
                 <thead>
                     <tr>
                       	<th colspan="1">رقم الهوية</th>
						<th>الجنس</th>
						<th colspan="2">تاريخ الميلاد</th>
					</tr>
				</thead>
                <tbody>
					<tr>
						<td colspan="1">857016448</td>
                        <td>ذكر</td>
                        <td colspan="2">18-04-93</td>
                        	
					</tr>	
                </tbody>
                <tbody>
					<tr>
                       <td colspan="4"> <strong>العنوان:</strong>-العنوان</td>     	
					</tr>	
                </tbody>
				
			</table>
            
		  </div>
	    </div> 
        <div class="col-md-2 col-md-offset-1">
            <img  alt="Bootstrap Image Preview" src="images/neserna.png" class="default" />
        </div>
     </div>
     
      <div class="row">
        <div class="col-md-2 ">
         <button type="submit" class="btn btn-warning btn-lg"><i class="fa fa-user-md" aria-hidden="true"></i> تقديم للفحص الطبي </button>
        </div>
     </div>
     <hr>
     <div class="row">
		<div class="col-md-12">
     <div class="table-responsive">
			<table class="table table-condensed table-bordered " >
                <thead>
                    <tr class="bg-primary">
                      <th colspan="4" class="center">
                         <strong>
                                    تقرير الفحص الطبي 
                             عل يد طبيب الحكومة المختص أو المؤسة الطبية
                         </strong>
                       </th>
                    </tr>
                     <tr>
                        <th colspan="4" class="center">
                          <strong> 
                             تصريح طبي
                          </strong>
                          <br>
                          <div class="pp">
                              <p>  أصرح انني قمت بمعاينة السيد/ة:
                                <ins>الاسم الكامل</ins> 
                                <label class="form-check-inline">
                                   <input class="form-check-input" type="radio" name="v" id="" value="option1" required> أهل/أهلة
                                </label>
                                <label class="form-check-inline ">
                                  <input class="form-check-input" type="radio" name="v" id="" value="option2" required> غيرأهل/أهلة
                               </label> 
                                من ناحية صحته/صحتها. السوق بمركبة من النوع الذي قدم من أجله الطلب أعلاه وحسب قابليته المثبتة في القانون والتعليمات الموضحة أدناه: 
                              </p> 
                          </div>
                           <br> 
                           <ins>المعلومات الاخرى</ins>
                         </th>
                      </tr>
                  </thead>
                  <hr>
                  <thead>
                   <tr>
                       <th>حدة النظر</th>
                        <th>دون نظارات</th>
                        <th>مع نظارات</th>
                   </tr>
                   </thead>
                    <tbody>
                        <tr>
                        <th>العين اليمنى</th>
                        <td>
                          555555555555555555
                        </td>
                        <td>
                          لائق مع نظارات أوبدون
                        </td>
                        </tr>
                         <tr>
                        <th>العين اليسرى</th>
                        <td>
                         666666666666666666
                        </td>
                        <td>
                           لائق مع نظارات أوبدون
                        </td>
                        </tr>
                       <tr>
                        <th>زمرة الدم</th>
                         <td colspan="2">
                           زمرة الدم 
                         </td>
                       </tr>
                    </tbody>
                    <thead aria-colspan="4">
                       <tr>
                         <th colspan="4">
                           <p> إسم الطبيب:
                            <ins> إسم الطبيب الكامل</ins> 
                           </p>                                    
                         </th>  
                       </tr>
                    </thead>
			         </table>
		     </div>
           </div>
        </div>
        <br>
          <div class="row">
             <div class="form-group col-md-2">
               <button type="submit" class="btn btn-success btn-lg"> <i class="fa fa-laptop" aria-hidden="true"></i> تقدم ل الإمتحان النظري </button>
              </div>
              <div class="form-group col-md-2">
               <button type="submit" class="btn btn-danger btn-lg"> <i class="fa fa-car" aria-hidden="true"></i> تقدم ل الإمتحان العملي </button>
              </div>
         </div>
         <hr>
         <div class="row">
		       <div class="col-md-12">
              <div class="table-responsive">
		          	<table class="table table-condensed table-bordered">
                  <thead>
                     <tr class="bg-primary"><th colspan="6" class="center"><strong>الفحص النظري</strong></th></tr>
                     <tr>
                      <th>كيفية الفحص</th>
                      <th>تاريخ الفحص</th>
                      <th>ساعة الفحص</th>
                      <th>نتيجة الفحص النظري</th>
                      <th>إسم الفاحص</th>
                      <th>رقم الفاحص</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>شفوي</td>
                      <td>41-5-12</td>
                      <td>10:00</td>
                      <td><span class="label label-danger">ناجح</span></td>
                      <td>عوض الزعيتر</td>
                      <td>5578787</td>   
                    </tr>
                  </tbody>
		          	</table>
                <hr>
                	<table class="table table-condensed table-bordered">
                  <thead>
                     <tr class="bg-primary"><th colspan="6" class="center"><strong>الفحص العملي</strong></th></tr>
                     <tr>
                      <th>تاريخ الفحص</th>
                      <th>ساعة الفحص</th>
                      <th>رقم المركبة</th>
                      <th>نتيجة الفحص العملي</th>
                      <th>إسم الفاحص</th>
                      <th>رقم الفاحص</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>41-5-12</td>
                      <td>11:00</td>
                      <td>14-647-67</td>
                      <td><span class="label label-danger">ناجح</span></td>
                      <td>عوض الزعيتر</td>
                      <td>5578787</td>   
                    </tr>
                  </tbody>
		          	</table>
              </div>
		       </div>
         </div>
     </div>
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
 </div>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>
 <?php 
 } else 
header("Location:login.php");?>