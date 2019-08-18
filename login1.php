<?php

#login.php-----------

if(isset($_POST['submit']))
 {
$php_user=$_POST['id'];
$php_pass=$_POST['pass'];

#echo $php_user,$php_pass."<hr>";


#create database variable---------------

                    $db_host="localhost";
                     $db_user="root";
                       $db_pass="";
                    $db_dbname="bankingsystem";


$con=mysql_connect($db_host,$db_user,$db_pass);
$db=mysql_select_db($db_dbname,$con);
$sql="SELECT * FROM account_request WHERE userid='$php_user' AND phone='$php_pass' ";
$data=mysql_query($sql);
echo $sql; 
if($data)
{

$rowcount=mysql_num_rows($data);


if($rowcount>0)
{
$row=mysql_fetch_array($data);

        echo "<pre>";

var_dump($row);

echo "login success";

session_start();

$_SESSION['uid']=$row['userid'];
$_SESSION['uname']=$row['name'];






header('location:index.html');

}

else

{
echo "login fail";

}
}

else
{
header('location:login.html?error=invalid reguest');

}
}
?>
