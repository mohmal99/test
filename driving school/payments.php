<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['type']=="school") 
{

$id =$_GET['user_id'];
include("config.php");
include("schooldata.php");


?>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>الدفعات</title>

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
   .center{
          width: 150px;
          margin: 40px auto;}
</style>
</head>

<body >
     <?php include'school-nav.php'; ?>

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
                           <li>
				        	  <a href="show-students.php"> عرض الطلاب </a> <span class="divider"></span>
				           </li>
				           <li class="active">
					          الدفعات
				           </li>
                            
                        </ol>
                    </div>
                </div>
 <div class="row">
     <div class="col-md-12">
        <header class="jumbotron hero-spacer">
            <div class="row">
		<div class="col-md-12">
			<div class="tabbable" id="tabs-473255">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-48270" data-toggle="tab"><span> <i class="fa fa-money" aria-hidden="true"> الدفعات</i> </span></a>
					</li>
					<li>
						<a href="#panel-459215" data-toggle="tab"><span> <i class="fa fa-plus-circle" aria-hidden="true"></i> عدد الدروس واضافة دفعات  </span> </a>
					</li>
				</ul>
				<div class="tab-content">
         <div class="tab-pane active"  id="panel-48270">
             <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                        <h4><spam><i class="fa fa-money" aria-hidden="true"></i> الدفعات قيمتها وتاريخ كل منها </spam></h4>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="success">
                                            <th> العدد  </th>
                                            <th> تاريخ الدفعة </th>
                                            <th> قيمة الدفعة </th>
                                            <th>تفاصيل أخرى</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql="select Date,Amount,details from payments where UserId=$id";
                                    $userresult=mysql_query($sql,$connection) or die(mysql_error());
                                    $count=1;
                                    $paid=0;
                                    while($userrow=mysql_fetch_array($userresult)) 
                                    {
                                    $paid=$paid+$userrow[1];
                                       $paiddate=$userrow[0];
                                       $useramout=$userrow[1];
                                       $userdetails=$userrow[2];
                                    ?>
                                    
                                        <tr>
                                            <td> <?php echo $count; ?> </td>
                                            <td><?php echo $paiddate ?></td>
                                            <td><?php echo $useramout ?></td>
                                             <td><?php echo $userdetails ?></td>
                                        </tr>
                                      <?php   $count=$count+1; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        <div>
                        <?php
                        $sql="select LessonsNo,Price from users join Licence on users.LicenceId=Licence.LicenceId
                       where UserId=$id";
                        $result=mysql_query($sql,$connection) or die(mysql_error());
                        $pricerow=mysql_fetch_array($result);
                        $allprice=$pricerow['LessonsNo']*$pricerow['Price'];
                        $remainprice=$allprice-$paid;
                        ?>
                           <h4> <spam class="label label-success"> المبلغ الكلي :<?php echo $allprice ?> شيكل </spam></h4>
                           <h4> <spam class="label label-danger" > المبلغ المتبقي :<?php echo $remainprice; ?> شيكل  </spam></h4>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
         </div>
         </div>
         <div class="tab-pane" id="panel-459215">
						 <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        <h4><spam><i class="fa fa-plus-circle" aria-hidden="true"></i> عدد الدروس وإضافة دفعات </spam></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="row">
                                 <div class="col-md-6 col-md-offset-3">
                              <form data-toggle="validator" method="post" role="form">
                                <div class="form-group">
                                <input type="number" class="form-control" id=""  required name="amount" placeholder="قيمة الدفعة ">
                               </div>
                               
                                <div class="form-group">
                                

                                <textarea rows="4" cols="50" name="details"class="form-control"placeholder="تفاصيل أخرى..."></textarea>

                               </div>
                               <label> عدد الدروس  </label>
                            <div class="input-group">
                             <span class="input-group-btn">
                               <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                 <span class="glyphicon glyphicon-minus"></span>
                               </button>
                             </span>
                             <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="50">
                              <span class="input-group-btn">
                               <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                 <span class="glyphicon glyphicon-plus"></span>
                              </button>
                            </span>
                        </div> 
                        <br>
                          <div class="form-inline row">
                           <div class="form-group col-md-4 col-md-offset-5">
                               <button type="submit" name="add" class="btn btn-primary"><h5><i class="fa fa-plus-square" aria-hidden="true"></i> إضافة</h5> </button>
                           </div>
                          </div>
                  </form>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  </div>
              </div>
             </div>
          </div>
         </div>
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
 </div>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    </script>
</body>
</html>
<?php }else
header("location:login.php");
if(isset($_POST['add']))
{
$amount=$_POST['amount'];

$details=$_POST['details'];
$SchoolId=$_SESSION['schoolid'];
$sql="insert into payments (Date,Amount,Details,UserId,SchoolId) values (NOW(),$amount,'$details',$id,$SchoolId)";
$result=mysql_query($sql,$connection) or die(mysql_error());


}
?>
