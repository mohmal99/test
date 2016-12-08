
<?php session_start(); 

if(isset($_SESSION['id']) && $_SESSION['type']=="school") 

{
  
  
  include 'config.php';
$loginid=$_SESSION['id'];
$user_id=$_GET['user_id'];
$studentsarray=array();
$studentsarray=$_SESSION['studentsarray'];
if(in_array($user_id,$studentsarray))
{

$sqlstudent="select *,count(*) as count
from users u,trafficdepartment t,licence l
LEFT JOIN medicaltest on medicaltest.UserId=$user_id

  where u.UserId=$user_id  and
u.GovernorateID=t.GovernorateID and l.LicenceId=u.LicenceId";
$resultstudent=mysql_query($sqlstudent,$connection) or die(mysql_error());
$rowstudent=mysql_fetch_array($resultstudent);

$sqllicence="select * from prelicence,licence where prelicence.UserId=$user_id";
$resultlicence=mysql_query($sqllicence,$connection) or die(mysql_error());
$rowlicence=mysql_fetch_array($resultlicence);

$sqltest="select *,count(*) as count from practicaltest where Userid=$user_id";
$resulttest=mysql_query($sqltest,$connection) or die(mysql_error());

$sqltorya="select * from theoreticaltest where Userid=$user_id";
$resulttorya=mysql_query($sqltorya,$connection) or die(mysql_error());

//echo $rowstudent[0];        
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
				        	  <a href="school.php"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"></span>
				           </li>
                    <li>
				        	  <a href="show-students.php"> <i  aria-hidden="true"></i> عرض الطلاب </a> <span class="divider"></span>
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
                              <h4> إلى إدارة الترخيص في <?php echo $rowstudent['TrafficName']; ?>  </h4>
                              <h4> أنا المذكور أدناه أطلب بهذا رخصة سياقة لمركبة ميكانيكية من نوع 
                                <?php echo $rowstudent['Type']; ?>  </h4>
                              <h4> وبحوزتي رخصة سياقة رقم <?php if(isset($rowlicence['LicenceNo']))
                              echo $rowlicence['LicenceNo'];
                              else
                              echo "----";
                               ?>
                                  من نوع-النوع <?php if(isset($rowlicence['Type']))
                              echo $rowlicence['Type'];
                              else
                              echo "----";
                               ?></h4>
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
						            <td><?php echo $rowstudent['FirstName']; ?></td>
                        <td><?php echo $rowstudent['FatherName']; ?></td>
                        <td><?php echo $rowstudent['GFatherName']; ?></td>
                        <td><?php echo $rowstudent['FamilyName']; ?></td> 	
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
						<td colspan="1"><?php echo $rowstudent['IDN']; ?></td>
                        <td><?php  if($rowstudent['FamilyName']=='f')
                        echo "أنثى";
                        else
                        echo "ذكر";
                         ?></td>
                        <td colspan="2"><?php echo $rowstudent['DateOfBirth']; ?></td>
                        	
					</tr>	
                </tbody>
                <tbody>
					<tr>
                       <td colspan="4"> <strong>العنوان:</strong><?php echo $rowstudent['Street']; ?></td>     	
					</tr>	
                </tbody>
				
			</table>
            
		  </div>
	    </div> 
        <div class="col-md-2 col-md-offset-1">
            <img  alt="Bootstrap Image Preview" src="images/neserna.png" class="default" />
        </div>
     </div>
    
     <?php if($rowstudent['submitted']==0){ ?>
     
      <div class="row">
        <div class="col-md-2 ">
          <form method="POST" >
         <button type="submit" name="healthsubmit" class="btn btn-warning btn-lg"><i class="fa fa-user-md" aria-hidden="true"></i> تقديم للفحص الطبي </button>
        </form>
        </div>
     </div>
     
     <?php
     
      } ?>
    
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
                                <ins><?php  if($rowstudent['submitted']==1)
                                echo $rowstudent['FirstName'].' '.$rowstudent['FatherName'].' '.$rowstudent['GFatherName'].' '.$rowstudent['FamilyName']; ?></ins> 
                                <label class="form-check-inline">
                                  
                                   <input class="form-check-input" <?php  
                                   if($rowstudent['submitted']==1){
                                   if($rowstudent['appropriate']==1) {?>checked <?php }} ?>
                                   type="radio" name="v" id="" value="option1" required> أهل/أهلة
                                </label>
                                <label class="form-check-inline ">
                                  <input class="form-check-input" <?php
                                    if($rowstudent['submitted']==1){                                   
                                    if($rowstudent['appropriate']==0) {?>checked <?php }} ?>type="radio" name="v" id="" value="option2" required> غيرأهل/أهلة
                               </label> 
                                من ناحية صحته/صحتها. السوق بمركبة من النوع الذي قدم من أجله الطلب أعلاه وحسب قابليته المثبتة في القانون والتعليمات الموضحة أدناه: 
                              </p> 
                          </div>
                           <br> 
                           <ins>المعلومات الاخرى: </ins> <?php   echo $rowstudent['details']; ?>
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
                          <?php  
                          echo $rowstudent['righteye']; ?>
                        </td>
                        <td>
                          <?php  
                          if($rowstudent['rightglasses']==1)
                          echo "لائق مع نظارات";
                          else
                          echo "لائق بدون نظارات";
                          ?>
                           
                        </td>
                        </tr>
                         <tr>
                        <th>العين اليسرى</th>
                        <td>
                         <?php  
                          echo $rowstudent['lefteye']; ?>
                        </td>
                        <td>
                          <?php  
                          if($rowstudent['leftglasses']==1)
                          echo "لائق مع نظارات";
                          else
                          echo "لائق بدون نظارات";
                          ?>

                        </td>
                        </tr>
                       <tr>
                        <th>زمرة الدم</th>
                         <td colspan="2">
                           <?php 
                          echo $rowstudent['bloodtype'];?> 
                         </td>
                       </tr>
                    </tbody>
                    <thead aria-colspan="4">
                       <tr>
                         <th colspan="4">
                           <p> إسم الطبيب:
                            <ins> <?php  
                          echo $rowstudent['DrName'];?> </ins> 
                           </p>                                    
                         </th>  
                       </tr>
                    </thead>
			         </table>
		     </div>
           </div>
        </div>
        <br>
        
          
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
                    <?php 
                    $resultforbuttontorya="";
                    while($rowtorya=mysql_fetch_array($resulttorya)){ 
                     $resultforbuttontorya=$rowtorya['Result'];
                      ?>
                    <tr>
                      <td><?php echo $rowtorya['Method']; ?></td>
                      <td><?php echo $rowtorya['Date']; ?></td>
                      <td><?php echo $rowtorya['Time']; ?></td>
                      <td><span class="label label-danger"><?php  
                      if($rowtorya['Result']==1)
                      echo "ناجح";
                      else if($rowtorya['Result']==0)
                      echo "راسب";
                      else echo "";
                       ?></span></td>
                      <td><?php  echo $rowtorya['ExaminerName']; ?> </td>
                      <td><?php  echo $rowtorya['ExaminerNo']; ?></td>   
                    </tr>
                    <?php }?>
                  </tbody>
		          	</table>
                <?php if($resultforbuttontorya==0 && $rowstudent['submitted']==1) {?>
                 <div class="row">
             <div class="form-group col-md-2">
               <button type="submit"
               
                class="btn btn-success btn-lg"> <i class="fa fa-laptop" aria-hidden="true"></i> تقدم للإمتحان النظري </button>
              </div>
              </div>
                <?php } ?>
                
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
                    <?php $resultforbuttontest="";
                    
                     while($rowtest=mysql_fetch_array($resulttest))
                           {$resultforbuttontest=$rowtest['Result'];
                           ?>
                    <tr>
                      <td><?php echo $rowtest['Date']; ?></td>
                      <td><?php echo $rowtest['Time']; ?></td>
                      <td><?php echo $rowtest['CarNo']; ?></td>
                      <td><span class="label label-danger"><?php  
                      if($rowtest['Result']==1)
                      echo "ناجح";
                      else if($rowtest['Result']==0)
                      echo "راسب";
                      else echo "";
                       ?></span></td>
                      <td><?php echo $rowtest['ExaminerName']; ?> </td>
                      <td><?php echo $rowtest['ExaminerNo']; ?></td>   
                    </tr>
                    <?php } ?>
                  </tbody>
		          	</table>
               <div class="row">
            <?php if($resultforbuttontest==0 && $rowstudent['submitted']==1) {?>
              <div class="form-group col-md-2">
               <button type="submit" 
               class="btn btn-danger btn-lg"> <i class="fa fa-car" aria-hidden="true"></i> تقدم للإمتحان العملي </button>
              </div>
         </div>
            <?php } ?>
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
}else header("Location:show-students.php");
 } else 
header("Location:login.php");

?>