<?php
$php_name=$_POST['name'];
$php_fname=$_POST['fname'];
$php_adhar=$_POST['adhar'];
$php_pan=$_POST['pan'];
$php_padd=$_POST['padd'];
$php_pcity=$_POST['pcity'];
$php_pstate=$_POST['pstate'];
$php_pdistrict=$_POST['pdistrict'];
$php_ppincode=$_POST['ppincode'];
$php_cadd=$_POST['cadd'];
$php_ccity=$_POST['ccity'];
$php_cdistrict=$_POST['cdistrict'];
$php_cstate=$_POST['cstate'];
$php_cpincode=$_POST['cpincode'];
$php_phone=$_POST['phone'];
$php_email=$_POST['email'];
					
					
#echo $php_name,$php_fname,$php_adhar,$php_pan,$php_padd,$php_pcity,$php_pstate,$php_pdistrict,$php_ppincode,$php_cadd,
#$php_ccity,$php_cdistrict,$php_cstate,$php_cpincode,$php_phone,$php_email."<hr>"; 
#-------------------------------DataBase vairiable--------------------------


$db_host="localhost";
$db_user="root";
$db_pass="";
$db_dbname="bankingsystem";



#Connect to dbserver

$con=mysqli_connect($db_host,$db_user,$db_pass,$db_dbname);




#Connect to database
if($con)
{
	#$db=mysqli_select_db($db_dbname,$con);



#Creating a Query
$sql_insert="INSERT INTO tbl_account_request
(name,fname,adhar,pan,padd,pcity,pdistrict,pstate,ppincode,cadd,ccity,cdistrict,cpincode,cstate,phone,email)VALUES('$php_name','$php_fname','$php_adhar','$php_pan','$php_padd','$php_pcity','$php_pdistrict','$php_pstate','$php_ppincode','$php_cadd','$php_ccity','$php_cdistrict','$php_cpincode','$php_cstate','$php_phone','$php_email')";
		
 


 
 $data=mysqli_query($con,$sql_insert);
mysqli_close($con);
}


if($data)
	{
		header("../login.php?sucess=101");
	}
	else
		{
			header("../register.php?error=101");
		}


		?>