<?php 
include ("config.php");
$user_id=$_GET['user_id'];
$healthdepartmentid=$_SESSION['healthid'];

$healthloginid=$_SESSION['id'];
 $sqlmedical="select * from medicaltest where UserId=$user_id";
 $medicalresult=mysql_query($sqlmedical,$connection) or die(mysql_query());
  $medicalrow=mysql_fetch_array($medicalresult);

   $sql="select concat(FirstName,' ',FatherName,' ',GFatherName,' ',FamilyName) as name,FirstName,FatherName
   ,GFatherName,FamilyName,DateOfBirth,IDN,Street,Gender,Licence.Type as licencetype from users,
         Licence where users.LicenceId=Licence.LicenceId  and UserId=$user_id";
        $result=mysql_query($sql,$connection)or die(mysql_error());
        $row=mysql_fetch_array($result);
        if($row['Gender']=='f')
          $row['Gender']='أنثى';
        else
          $row['Gender']='ذكر';

      $govsql="select GovernorateName from governorate
                         where GovernorateID=(select GovernorateID 
                          from healthdepartment where LoginId=$healthloginid)";
                        $govresult=mysql_query($govsql,$connection)or die(mysql_error());
                        $govrow=mysql_fetch_array($govresult);
                        //read previos licence
                        $prelicence="select Licence.Type as type ,LicenceNo from prelicence
                        JOIN Licence on prelicence.LicenceId=Licence.LicenceId
                        where UserId=$user_id ";
                        $prelicenceresult=mysql_query($prelicence,$connection)or die(mysql_error());
                        $prelicencerow=mysql_fetch_array($prelicenceresult);

?>
