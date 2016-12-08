
<?php session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="health") 
{                 include('config.php');
$healthdepartmentid=$_SESSION['healthid'];
$healthdepartmentname=$_SESSION['healthname'];

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>الأسماء للفحص الطبي</title>
    <link href="DataTables/data.css" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
<style type="text/css">
   body { background: white !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</head>

<body >
 <div class="container-fluid">
     <?php include 'health-nav.php';?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            وزارة الصحة<small> <?php echo $healthdepartmentname;?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="health-main.php"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"> </span>
                            </li>
                            <li class="active">
					            الأسماء للفحص الطبي
				           </li>
                            
                        </ol>
                    </div>
                </div>
             <header class="jumbotron hero-spacer">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr class="success">
                      <th> إسم الطالب الرباعي</th>
                      <th>نوع الرخصة</th>
                      
                      <th>عرض</th>
                      <th>تسجيل الفحص</th>
                   </tr>
                 </thead>
                 <tfoot>
                 <tr class="success">


                      <th> إسم الطالب الرباعي</th>
                      <th>نوع الرخصة</th>
                      <th>عرض</th>
                     <th>تسجيل الفحص</th>
                   </tr>
                </tfoot>
                <tbody>
                <?php
                 
               $result=mysql_query("select * from users,healthdepartment,Licence,medicaltest
                where users.GovernorateID=healthdepartment.GovernorateID and
                 medicaltest.HealthId=$healthdepartmentid
                  and Licence.LicenceId=users.LicenceId and
                medicaltest.UserId=users.UserId  
                ",$connection);
                
                 while($row=mysql_fetch_array($result))
                  {
                    $user_id=$row['UserId'];
                    ?>
                  <tr>
                       <td> <?php echo $row['FirstName']." ".$row['FatherName']." ".$row['GFatherName']." ".$row["FamilyName"];?></td>
                       <td><?php echo $row['Type'];?></td>
                      
                       <?php if($row['submitted']==1){?>
                       <td><a href="doc.php<?php echo "?user_id=$user_id"?>" ><button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                       <td><button disabled="" type="button"  class="btn btn-warning"><i class="fa fa-stethoscope" aria-hidden="true"></i></button></td>
                <?php }else if($row['submitted']==0){ ?>
                 <td><a href="doc.php<?php echo "?user_id=$user_id"?>" ><button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                       <td><a href="doc-add.php<?php echo "?user_id=$user_id"?>"<button type="button"  class="btn btn-warning"><i class="fa fa-stethoscope" aria-hidden="true"></i></button></a></td>
                  </tr>
                  <?php }}
                   ?>
              </tbody>
           </table>
         </div>
       </div>
    </header>



 

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
            </he
           
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


</body>

</html>
<?php }else header("Location:login.php");?>