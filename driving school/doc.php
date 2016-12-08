<?php session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="health") 
{
include 'doc-data.php';
include 'health-nav.php';

        
?><!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>التصريح الطبي</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS RTL-->
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
     <link href="css/slide.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">
<!-- Date Bicker CSS -->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
         } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
  .center{
     text-align: center;
  }
</style>
</head>

<body >
    <div class="container-fluid">
         <!-- Navigation -->
          <?php include 'health-nav.html';?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            تقرير<small> الفحص الطبي</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a  href="health-main.php"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"></span>
				           </li>
                           <li>
				        	  <a  href="students-inhealth.php"> <i class="fa fa-home" aria-hidden="true"></i> طلبات الفحوصات الطبية </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          تصريح طبي
				           </li>
                            
                        </ol>
                    </div>
                </div>
               <div class="row">
                 <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <h4><spam><i class="fa fa-user-md" aria-hidden="true"></i> تصريح طبي </spam></h4>
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
                        <?php 

                        //read governorate info.
                        
                       
                        ?>
                          <div class="row">
                             <div class="col-md-10">
                              <h4> إلى إدارة الترخيص في - <?php echo $govrow['GovernorateName']; ?></h4>
                              <h4> أنا المذكور أدناه أطلب بهذا رخصة سياقة لمركبة ميكانيكية من نوع 
                               <?php echo $row['licencetype'];?> </h4>
                              <h4> وبحوزتي رخصة سياقة رقم <?php if($prelicencerow['LicenceNo']!=0)
                              echo $prelicencerow['LicenceNo'];
                              else echo "----";?> من نوع 
                              <?php if($prelicencerow['type']!=0)
                              echo $prelicencerow['type'];
                              else echo "----"; ?> </h4>
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
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['FatherName']; ?></td>
                        <td><?php echo $row['GFatherName']; ?></td> 
                        <td><?php echo $row['FamilyName']; ?></td>  
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
            <td colspan="1"><?php echo $row['IDN']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td colspan="2"><?php echo $row['DateOfBirth']; ?></td>
                          
          </tr> 
                </tbody>
                <tbody>
          <tr>
                       <td colspan="4"> <strong>العنوان:</strong><?php echo $row['Street']; ?></td>       
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
                            <div class="form-inline row">
                              <div class="form-group">
                                  <p class="form-control-static">أصرح انني قمت بمعاينة السيد/ة</p>
                               </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" id="" 
                                  value="<?php echo $row['FirstName'];
                                  ?>"
                                  placeholder="الإسم الكامل" readonly>
                               </div>
                               
                                
                               <div class="form-group">
                                  <p class="form-control-static"> ووجدته </p>
                               </div>
                               <label class="form-check-inline">
                                   <input class="form-check-input" type="radio" name="v" id="" value="option1" <?php if($medicalrow['appropriate']==1) {?>checked <?php }?>disabled> أهل/أهلة
                             </label>
                             <label class="form-check-inline ">
                                  <input <?php if($medicalrow['appropriate']==0)  {?>checked <?php }?> class="form-check-input" type="radio" name="v" id="" value="option2"  disabled> غيرأهل/أهلة
                             </label>
                          
                             <div class="form-group">
                                  <p class="form-control-static"> من ناحية صحته/صحتها. السوق بمركبة من النوع الذي قدم من أجله الطلب أعلاه وحسب قابليته المثبتة في القانون والتعليمات الموضحة أدناه:</p>
                             </div>  
                           </div> 
                           <br> 
                           <div class="form-group ">
                                  <textarea readonly class="form-control" rows="2" id="" required>
                                    <?php echo $medicalrow['details'];?>
                                  </textarea>
                          </div>
                         
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
                            <?php  echo $medicalrow['righteye']; ?>
                        </td>
                        <td>
                          
                             <?php if($medicalrow['rightglasses']==1)
                            echo "لائق مع نظارات";
                            else if($medicalrow['rightglasses']==0)
                              echo "لائق بدون نظارات";
                              ?>
                              
                        </td>
                        </tr>
                         <tr>
                        <th>العين اليسرى</th>
                        <td>
                          <?php 
                          echo $medicalrow['lefteye']; ?>
                            
                              
                        </td>
                        <td>
                          <?php 
                          if($medicalrow['leftglasses']==1)
                            echo "لائق مع نظارات";
                            else if($medicalrow['leftglasses']==0)
                              echo "لائق بدون نظارات";
                              ?>
                        </td>
                        </tr>
                       <tr>
                        <th>زمرة الدم</th>
                         <td colspan="2">
                          <?php 
                          echo $medicalrow['bloodtype'];
                              ?>
                         </td>
                       </tr>
                    </tbody>
                    <thead aria-colspan="4">
                      <tr>
                         <th colspan="4">
                           <div class="form-inline row">
                              <div class="form-group col-md-6 col-sm-6">
                               <label for=""> التاريخ</label>
                               <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                  
                                  <input  value=<?php echo $medicalrow['Date']; ?> class="form-control" size="16" type="text" value="" readonly >
                                </div>
                        <input type="hidden" id="dtp_input2" value="" /><br/>
                               </div>
                                <div class="form-group">
                                  <label for=""> إسم الطبيب</label>
                                  <input type="text" value="<?php echo $medicalrow['DrName'];?>" class="form-control" id="" readonly placeholder="إسم الطبيب" >
                               </div>
                           </div>
                           
                         </th>  
                       </tr>
                    </thead>
			   </table>
		     </div>
           </div>
        </div>
        <br>
         
      </form>
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
<?php }else header("Location:login.php");?>
