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

    <title> عرض المدارس</title>
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
    <?php include 'admin-nav.php'; ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            إدارة<small> مدارس السواقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="admin-page.php"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"> </span>
                            </li>
                            <li class="active">
					          عرض المدارس
				           </li>
                            
                        </ol>
                    </div>
                </div>
             <header class="jumbotron hero-spacer">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr class="success">
                      <th>إسم المدرسة</th>
                      <th>إسم صاحب المدرسة</th>
                      <th>المحافظة</th>
                      <th>العنوان</th>
                      <th>رقم الجوال</th>
                      <th>رقم الهاتف</th>
                      <th>الإيميل</th>
                      <th>تعديل</th>
                   </tr>
                 </thead>
                 <tfoot>
                   <tr class="success" >
                      <th>إسم المدرسة</th>
                      <th>إسم صاحب المدرسة</th>
                      <th>المحافظة</th>
                      <th>العنوان</th>
                      <th>رقم الجوال</th>
                      <th>رقم الهاتف</th>
                      <th>الإيميل</th>
                      <th>تعديل</th>
                  </tr>
                </tfoot>
               <tbody>
               <?php 
               $sql="select * from schools JOIN governorate on schools.GovernorateID=governorate.GovernorateID";
               $result=mysql_query($sql,$connection) or die(mysql_error());
               while($schoolsrow=mysql_fetch_array($result))
                { $schoolid=$schoolsrow['SchoolId']; ?>
                  <tr>
                       <td><?php echo $schoolsrow['SchoolName']; ?></td>
                       <td><?php echo $schoolsrow['ManagerName']; ?></td>
                       <td><?php echo $schoolsrow['GovernorateName']; ?></td>
                       <td><?php echo $schoolsrow['Address']; ?></td>
                       <td><?php echo $schoolsrow['MobileNumber']; ?></td>
                       <td><?php echo $schoolsrow['PhoneNumber']; ?></td>
                       <td><?php echo $schoolsrow['Email']; ?></td>
                       <td><a href="edit-school.php<?php echo '?school_id='.$schoolid;?>">
                       <button type="button" class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </button>
                       </a></td>
                  </tr>
                  <?php } ?>
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
<?php } else 
header("Location:login.php");?>