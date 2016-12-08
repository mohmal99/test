<?php 
session_start();
if(isset($_SESSION['id']) && $_SESSION['type']=="traffic") 
{      include('config.php');
$trafficdepartmentid=$_SESSION['trafficid'];
$trafficdepartmentname= $_SESSION['trafficname'];


?> 
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>الطلاب للأمتحان النظري والعملي</title>
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
     <?php include'traffic-nav.php'; ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           داَئرة السير في<small> <?php echo $trafficdepartmentname; ?> </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="traffic-main.php"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a> <span class="divider"> </span>
                            </li>
                            <li class="active">
					            الطلاب للإمتحان العملي 
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
                      <th>التاريخ</th>
                      <th>عرض</th>
                      <th>إدخال المعلومات</th>
                   </tr>
                 </thead>
                 <tfoot>
                 <tr class="success">
                      <th> إسم الطالب الرباعي</th>
                      <th>نوع الرخصة</th>
                      <th>التاريخ</th>
                      <th>عرض</th>
                      <th>إدخال المعلومات</th>
                   </tr>
                </tfoot>
                <tbody>
                    <?php $practicalsql="select *,concat(FirstName,' ',FatherName,' ',GFatherName,' ',FamilyName)
                                         as name from users,healthdepartment,practicaltest,licence where 
                                        users.GovernorateID=healthdepartment.GovernorateId and 
                                        practicaltest.UserId=users.UserId and users.LicenceId=licence.LicenceId";
                        $practicalresult=mysql_query($practicalsql,$connection) or die(mysql_error());
                       while( $practicalrow=mysql_fetch_array($practicalresult)) {?>
                  <tr>
                       <td> <?php echo $practicalrow['name']; ?></td>
                       <td><?php echo $practicalrow['Type']; ?></td>
                       <td><?php echo $practicalrow['ToryaDate']; ?></td>
                       <td><button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                       <td><button type="button" class="btn btn-danger"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>

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
<?php }else header("Location:login.php");?>