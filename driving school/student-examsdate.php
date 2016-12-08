<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="school") 
{ 
                  include 'config.php';
                  $current_date=$_GET['date'];
                  include("schooldata.php");



?>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> مواعيد إمتحانات الطلاب  </title>

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
        <!-- Date Bicker CSS -->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
   body { background: white !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</head>

<body >
    <?php include 'school-nav.php'; ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <?php echo $_SESSION['schoolname']; ?> <small>لتعليم السياقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
				        	  <a href="school.php"> الرئيسية </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          مواعيد إمتحانات الطلاب
				           </li>
                            
                        </ol>
                    </div>
                </div>
 <div class="row">
     <div class="col-md-12">
        <header class="jumbotron hero-spacer">
           
                 <form action="" class="form-horizontal"  role="form">
                   <fieldset>
                      <div class="form-group col-md-6 col-sm-6">
                        <label for=""> التاريخ</label>
                        <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                           <input class="form-control" size="16" type="text" value="" readonly>
                       </div>
				       <input type="hidden" id="dtp_input2" value="" /><br/>
                     </div>
                  </fieldset>
                </form>
                
                <div class="row">
                   <div class="col-md-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                        <h4><spam><i class="fa fa-file-text" aria-hidden="true"></i> مواعيد الإمتحانات النظرية - التؤريا </spam></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="success">
                                            <th> العدد </th>
                                            <th> الإسم الرباعي </th>
                                            <th> رقم الهوية </th>
                                            <th> رقم الهاتف </th>
                                            <th> الموعد</th>
                                            <th> نوع الرخصة </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                   $count=1;
                                    $sql="select  toryadate,Type,
                CONCAT(firstname,' ', fathername,' ',gfathername,' ',familyname) AS fullname,
                idn,phoneno from users JOIN Licence on users.LicenceId=Licence.LicenceId
                 WHERE DATE(toryadate) = DATE(NOW())";
                
                $result=mysql_query($sql,$connection) or die(mysql_error());
                while($row=mysql_fetch_array($result))
                {  ?>

                                        <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['idn']; ?></td>
                                            <td><?php echo $row['phoneno']; ?></td>
                                            <td><?php echo $row['toryadate'];?></td>
                                            <td><?php echo $row['Type'];?></td>
                                        </tr>
                                        <?php $count=$count+1; }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    </div>
                </div>
                 <div class="row">
                   <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4><spam><i class="fa fa-car" aria-hidden="true"></i> مواعيد الإمتحانات العملية - التست</spam></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="success">
                                            <th> العدد </th>
                                            <th> الإسم الرباعي </th>
                                            <th> رقم الهوية </th>
                                            <th> رقم الهاتف </th>
                                            <th> الموعد</th>
                                            <th> نوع الرخصة </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                   $count=1;
                                    $sql="select  TestDate,type,
                CONCAT(firstname,' ', fathername,' ',gfathername,' ',familyname) AS fullname,
                idn,phoneno from users JOIN Licence on users.LicenceId=Licence.LicenceId
                WHERE DATE(TestDate) = DATE(NOW())";
                $count=1;
                $result=mysql_query($sql,$connection) or die(mysql_error());
                while($row=mysql_fetch_array($result))
                {  ?>
                                        <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['idn']; ?></td>
                                            <td><?php echo $row['phoneno']; ?></td>
                                            <td><?php echo $row['TestDate'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                        </tr>
                                        <?php $count=$count+1;}?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    </div>
                </div>
               
                </header>
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
    

        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   <!-- Date Bicker JavaScript -->

<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/locales/bootstrap-datetimepicker.ar.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  $('.form_date').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>
</body>
</html>
<?php }else
header("location:login.php"); ?>
