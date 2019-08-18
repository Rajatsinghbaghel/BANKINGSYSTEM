<?php
if(isset($_POST['submit']))
{
    $phpname=$_POST['name'];
     $phpfname=$_POST['fname'];
     $phpadhar=$_POST['adhaar'];
     $phppan=$_POST['pan'];
     $phpaddress1=$_POST['address1'];
     $phpcity1=$_POST['city1'];
     $phpdistrict1=$_POST['district1'];
      $phppin1=$_POST['pin1'];
       $phpstate1=$_POST['state1'];
        $phpaddress2=$_POST['address2'];
         $phpcity2=$_POST['city2'];
          $phpdistrict2=$_POST['district2'];
           $phppin2=$_POST['pin2'];
            $phpstate2=$_POST['state2'];
             $phpmobile=$_POST['mobile'];
              $phpemail=$_POST['email'];
               
        // echo  $phpname,$phpfname,$phpadhar,$phppan,$phpaddress1,$phpcity1,++++
          //          $phpdistrict1,$phppin1,$phpstate1,$phpaddress2,$phpcity2,$phpdistrict2,
            //        $phppin2,$phpstate2,$phpmobile,$phpemail."<hr>";
    
    #create database variable---------------

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_dbname="bankingsystem";

#connect to server----------------

$con=mysql_connect($db_host,$db_user,$db_pass);

#connect to database-------------------

if($con)
{

$db=mysql_select_db($db_dbname,$con);

echo $db;

}
#creating a query-------------

$sql_insert="INSERT INTO `account_request`( `name`, `fname`, `adhar`, `pan`, `padd`, `pcity`, `pdistrict`, `pstate`, `ppincode`, `cadd`, `ccity`, `cdistrict`, `cpincode`, `cstate`, `phone`, `email`) 
VALUES ('$phpname','$phpfname','$phpadhar','$phppan','$phpaddress1','$phpcity1','$phpdistrict1','$phpstate1','$phppin1','$phpaddress2','$phpcity2','$phpdistrict2','$phppin2','$phpstate2','$phpmobile','$phpemail')";


echo"<hr>".$sql_insert."<hr>";

$data=mysql_query($sql_insert);

mysql_close($con);

if($data)
{
header('location:./NiceAdmin/basic_table.php');
}

else
{

header('location:registration.html');

}
}
?>
