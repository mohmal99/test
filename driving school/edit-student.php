
<?php session_start(); 

if(isset($_SESSION['id']) && $_SESSION['type']=="school") 

{include("Config.php");
include("schooldata.php");

  $id =$_GET['user_id'];

  $query=mysql_query("select * from users,governorate 
    where users.GovernorateID=governorate.GovernorateID and users.UserId=$id",$connection)or die(mysql_error());
  $row=mysql_fetch_array($query);
  

?>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>تعديل بيانات طالب</title>

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
 <div class="container-fluid">
    <!-- Navigation -->
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
                   تعديل بيانات الطالب
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
                                <h2 class="panel-title"><i class="fa fa-plus" aria-hidden="true"></i>تعديل بيانات الطالب</h2>
                            </div>
                            <div class="panel-body">
                                <header class="jumbotron hero-spacer">
                                    <form  method="post"   >
                                       <div class="form-group">
                                           <div class="form-inline row">
                                             <div class="form-group col-md-3">
                                                  <input type="text"  value="<?php echo $row['FirstName']; ?>" class="form-control" name="firstname" placeholder="الإسم الأول" required>
                                              </div>
                                              <div class="form-group col-md-3">
                                                 <input type="text" class="form-control"value="<?php echo $row['FatherName']; ?>" name="fathername" id=""  placeholder="إسم الأب" required>
                                              </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control" value="<?php echo $row['GFatherName']; ?>"name="gfathername" id=""  placeholder="إسم الجد" required>
                                            </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control"value="<?php echo $row['FamilyName']; ?>" name="familyname" id=""  placeholder="إسم العائلة" required>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <div class="form-inline row">

                                             <div class="form-group col-md-3">
                                                 <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                  <input type="text" class="form-control" readonly id="" name="idn" value="<?php echo $row['IDN']; ?>"onkeypress='validate(event)'  placeholder="رقم الهوية" minlength="9" maxlength="9" required>
                                              </div>
                                             </div>
                                              <div class="form-group col-md-3">تاريخ الميلاد
                                                 <input type="date" class="form-control" id="" value="<?php echo $row['DateOfBirth']; ?>"name="birthofdate" placeholder="تاريخ الميلاد" required>
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
                                                        {
                                                            ?>
                                                          <option  <?php if($governoraterow[0]==$row['GovernorateID']) {?> selected <?php }?>>
                                                      <?php echo $governoraterow[1]; ?></option>
                                                    
                                                       <?php }?>
                                                      </select> 

                                               </div><hr>
                                             
                                             </div>
                                             <div class="form-group col-md-3">
                                                <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-road" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" value="<?php echo $row['Street'];?>"name="street" id=""  placeholder="الشارع">
                                                </div>
                                            </div>
                                             </div>
                                             <div class="form-group">
                                         <div class="form-inline row">
                                              
                                               <div class="form-group col-md-3">موعد التؤوريا
                                                 (اختياري)<input type="datetime-local" class="form-control" id="" value="<?php echo $row['ToryaDate'];?>" name="toryadate" placeholder="تاريخ الميلاد" >
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            
                                             <div class="form-group col-md-3">موعد الامتحان العملي
                                                (اختياري) <input type="datetime-local" class="form-control" id="" value="<?php echo $row['TestDate'];?>" name="testdate" placeholder="تاريخ الميلاد" >
                                            </div>
                                           
                                       </div>
                                       </div>
                                       <hr>
                                        <div class="form-group">
                                         <div class="row">
                                             <div class="form-group col-md-4">
                                               <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                <input readonly type="email" class="form-control" name="email" value="<?php echo $row['Email'];?>"id="inputEmail" placeholder="الأيميل" data-error="Bruh, that email address is invalid" >
                                                 <div class="help-block with-errors">
                                                 </div>  
                                             </div> 
                                             </div>                                          
                                              <div class="form-group col-md-3">
                                                  <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" value="<?php echo $row['PhoneNo'];?>"name="phonenumber" id="" onkeypress='validate(event)' placeholder="رقم الموبايل">
                                                  </div>
                                              </div>
                                              <div class="form-group col-md-3">
                                                  <div class="input-group "> 
                                                   <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                   <input type="text" class="form-control" name="homenumber"value="<?php echo $row['HomeNumber'];?>" id="" onkeypress='validate(event)' placeholder="رقم الهاتف">
                                                  </div>
                                              </div>
                                       </div>
                                     </div>
                                      
                                      <?php if($row['Gender']=='f'){?>
                                           <div class="form-group">
                                           <div class="radio">
                                            <label>
                                            <input type="radio" name="gender" required>
                                            ذكر</label>
                                          </div>
                                         <div class="radio">
                                             <label>
                                             <input type="radio" checked name="gender" required>
                                             أنثى</label>
                                         </div>
                                     </div>
                                     <?php }else {?>
                                     <div class="form-group">
                                           <div class="radio">
                                            <label>
                                            <input type="radio" checked name="gender" required>
                                            ذكر</label>
                                          </div>
                                         <div class="radio">
                                             <label>
                                             <input type="radio" name="gender" required>
                                             أنثى</label>
                                         </div>
                                     </div>
                                     <?php }?>
                                     <label> نوع الرخصة المطلوبة</label>
                                   <select name="licencetype" id="select2">
                                    <?php
                                    $sqllicence="select * from licence";
                                    $resultlicence=mysql_query($sqllicence,$connection);
                                    while($rowlicence=mysql_fetch_array($resultlicence))
                                      {
                                        if($rowlicence[0]==$row['LicenceId'])
                                      echo "<option selected>  $rowlicence[1]</option>";
                                    else
                                      echo "<option >  $rowlicence[1]</option>";

                                      } 
                                    ?>
                                        
                                    
                                     </select>
                                     <br><br>
                                           <div class="form-group">
                                                 <button type="submit" name="update" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> تعديل </button>
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

if (isset($_POST['update'])) {

            $firstname=$_POST['firstname'];
            $fathername=$_POST['fathername'];
            $gfathername=$_POST['gfathername'];
            $familyname=$_POST['familyname'];
            $phonenumber=$_POST['phonenumber'];
            $homenumber=$_POST['homenumber'];
            $toryadate=$_POST['toryadate'];
            $testdate=$_POST['testdate'];

            $birthofdate=$_POST['birthofdate'];
            $city=$_POST['governorate'];
            $street=$_POST['street'];
            $licencetype=$_POST['licencetype'];
            if($_POST['gender']=="ذكر")
              $gender="m";
            else
              $gender="f";
  echo $testdate." ".$toryadate;

mysql_query(" UPDATE users SET FirstName='$firstname', FatherName='$fathername',
 GFatherName='$gfathername',
 FamilyName='$familyname',PhoneNo='$phonenumber',HomeNumber='$homenumber',
ToryaDate='$toryadate',TestDate='$testdate',Gender='$gender',GovernorateID=(select GovernorateID from governorate where GovernorateName='$city'),DateOfBirth='$birthofdate',
Street='$street',licenceId=(select licenceId from licence where licence.Type='$licencetype')
WHERE UserId = '$id' ",$connection)or die(mysql_error());
//echo "<script>alert('Successfully Updated User Info!'); window.location='show-students.php'</script>";
  //header("location:show-students.php");

}//isset
?>
