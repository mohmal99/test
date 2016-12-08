
<?php session_start(); 

if(isset($_SESSION['id']) && $_SESSION['type']=="school") 

{
$loginid=$_SESSION['id'];
  include("Config.php");
  include("schooldata.php");


?>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>إضافة طالب</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- custom upload file CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="styles.css" />
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
    <script>
    function validate(evt) {
     var theEvent = evt || window.event;
     var key = theEvent.keyCode || theEvent.which;
     key = String.fromCharCode( key );
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
    </script>
  <?php include'school-nav.php'; ?>
        <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">
                          <?php echo $_SESSION['schoolname']; ?> <small>لتعليم السياقة</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                 <a href="school.php" ><i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a>
                            </li>
                           
                            <li class="active">
                            <a href="show-students.php" ><i class="fa fa" aria-hidden="true"></i> عرض الطلاب</a>
                            </li>
                            <li class="active">
                   إضافة طالب
                   </li>
                            
                        </ol>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h2 class="panel-title"><i class="fa fa-plus" aria-hidden="true"></i>  إضافة طالب </h2>
                            </div>
                            <div class="panel-body">
                                <header class="jumbotron hero-spacer">
                                    <form  method="post"   >
                                       <div class="form-group">
                                           <div class="form-inline row">
                                             <div class="form-group col-md-3">
                                                  <input type="text" class="form-control" name="firstname" placeholder="الإسم الأول" required>
                                              </div>
                                              <div class="form-group col-md-3">
                                                 <input type="text" class="form-control" name="fathername" id=""  placeholder="إسم الأب" required>
                                              </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control" name="gfathername" id=""  placeholder="إسم الجد" required>
                                            </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control" name="familyname" id=""  placeholder="إسم العائلة" required>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <div class="form-inline row">

                                             <div class="form-group col-md-3">
                                                 <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                  <input type="text" class="form-control" id="" name="idn" onkeypress='validate(event)'  placeholder="رقم الهوية" minlength="9" maxlength="9" required>
                                              </div>
                                             </div>
                                              <div class="form-group col-md-3">تاريخ الميلاد
                                                 <input type="date" class="form-control" id="" name="birthofdate" placeholder="تاريخ الميلاد" required>
                                            </div>

                                       </div>
                                       </div>
                                        <div class="form-group">
                                         <div class="form-inline row">

                                             <div class="form-group col-md-3">
                                                <div class="input-group ">
                                                المحافظة 
                                                <select name="governorate" required>
                                                <?php $governoratesql="select * from governorate";
                                                      $governorateresult=mysql_query($governoratesql,$connection) or die(mysql_error());
                                                      while($governoraterow=mysql_fetch_array($governorateresult))
                                                        {?><option><?php echo $governoraterow[1];?></option>
                                                      <?php } ?>
                                                      </select>
                                                   
                                               </div><hr>
                                             
                                             </div>
                                             <div class="form-group col-md-3">
                                                <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-road" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" name="street" id=""  placeholder="الشارع">
                                                </div>
                                            </div>
                                             </div>
                                             <div class="form-group">
                                         <div class="form-inline row">
                                              
                                               <div class="form-group col-md-3">موعد التؤوريا
                                                 (اختياري)<input type="datetime-local" class="form-control" id="" name="toryadate" placeholder="تاريخ الميلاد" >
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            
                                             <div class="form-group col-md-3">موعد الامتحان العملي
                                                (اختياري) <input type="datetime-local" class="form-control" id="" name="testdate" placeholder="تاريخ الميلاد" >
                                            </div>
                                           
                                       </div>
                                       </div>
                                       <hr>
                                        <div class="form-group">
                                         <div class="row">
                                             <div class="form-group col-md-4">
                                               <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="الأيميل" data-error="Bruh, that email address is invalid" required>
                                                 <div class="help-block with-errors">
                                                 </div>  
                                             </div> 
                                             </div>                                          
                                              <div class="form-group col-md-3">
                                                  <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" name="phonenumber" id="" onkeypress='validate(event)' placeholder="رقم الموبايل">
                                                  </div>
                                              </div>
                                              <div class="form-group col-md-3">
                                                  <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" name="homenumber" id="" onkeypress='validate(event)' placeholder="رقم الهاتف">
                                                  </div>
                                              </div>
                                       </div>
                                     </div>
                                      <div class="form-group">
                                         <div class="radio">
                                            <label>
                                            <input type="radio" name="gender" required>
                                            ذكر</label>
                                          </div>
                                         <div class="radio">
                                             <label>
                                             <input type="radio" name="gender" required>
                                             أنثى</label>
                                         </div>
                                     </div>
                                     <label>نوع الرخصة</label>
                                   <select name="licencetype" id="select2">
                                    <?php
                                    $sqllicence="select * from licence";
                                    $resultlicence=mysql_query($sqllicence,$connection);
                                    while($row=mysql_fetch_array($resultlicence))
                                      {
                                      echo "<option>  $row[1]</option>";
                                      } 
                                    ?>
                                         
                                    
                                     </select>
                                     <br><br>
                                           <div class="form-group">
                                                 <button type="submit" name="addstudent" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> إضافة </button>
                                                <a href="show-students.php" <button type="button" class="btn btn-danger" onclick="location.href='';"><i class="fa fa-ban" aria-hidden="true"></i> إلغاء </button>
                                                    </a>
                                             </div>
                                 </form>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            
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
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Custom image js files -->
    <script src="filedrag.js"></script>

</body>

</html>
<?php 
 } else 
header("Location:login.php");
if(isset($_POST['addstudent']))
{
$firstname=$_POST['firstname'];
  $fathername=$_POST['fathername'];
  $grandfather=$_POST['gfathername'];
  $familyname=$_POST['familyname'];
  $idn=$_POST['idn'];
  $birthdate=$_POST['birthofdate'];
  $email=$_POST['email'];
  
  if($_POST['gender']=="ذكر")
    $gender="m";
  else
    $gender="f";
  $phonenumber=$_POST['phonenumber'];
  $homenumber=$_POST['homenumber'];
  $toryadate=$_POST['toryadate'];
  $testdate=$_POST['testdate'];
  $licencetype=$_POST['licencetype'];
  $street=$_POST['street'];
  $governorate=$_POST['governorate'];
  $licencetype=$_POST['licencetype'];
  $schoolemail=$_SESSION['email'];
  
  $sql="insert into users (FirstName,FatherName,GFatherName,FamilyName,IDN,Gender
        ,DateOfBirth,GovernorateID,Street,HomeNumber,Email,PhoneNo,ToryaDate,TestDate,
        RegDate,LicenceId)values('$firstname','$fathername','$grandfather',
        '$familyname','$idn','$gender'
        ,'$birthdate',(select GovernorateID from governorate where GovernorateName='$governorate'),'$street','$homenumber','$email','$phonenumber','$toryadate','$testdate',NOW(),
        (select Type from Licence where Type='$licencetype'))";
  $result=mysql_query($sql,$connection) or die(mysql_error());
  $sql1="insert into userschool (UserId,SchoolId) 
  values ((select UserId from users where email='$email'),(select SchoolId from schools where LoginId=$loginid))";
  mysql_query($sql1,$connection) or die(mysql_error());
  include("RandomPasswordGenerator.php");

        $password=generateRandomString();
                $loginsql="insert into login (Email,Password,Type) values ('$email','$password','user')";
                        mysql_query($loginsql,$connection) or die(mysql_error());
echo "<script>alert('Successfully Updated User Info!'); window.location='show-students.php'</script>";


  
  //header("location:show-students.php");

}//isset?>
