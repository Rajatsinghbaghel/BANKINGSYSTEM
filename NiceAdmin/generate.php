  <?php
  if(isset($_GET['act'])&&($_GET['act']=="update"))
  {
      $id;
  
					$db_host="localhost";
                     $db_user="root";
                       $db_pass="";
                    $db_dbname="bankingsystem";

					
					$con=mysql_connect($db_host,$db_user,$db_pass);
					
					$db=mysql_select_db($db_dbname,$con);
					
                    $id=$_GET['id'];
                    $userid="ABDC".rand(100,555).$id;
                    $update="UPDATE account_request SET status=1, userid='$userid'
                                    WHERE ar_id='$id'";
                    $data=mysql_query($update);
					header('location:basic_table.php?accepted');
          }
?>


<?php
  if(isset($_GET['act'])&&($_GET['act']=="delete"))
  {
  
					$db_host="localhost";
                     $db_user="root";
                       $db_pass="";
                    $db_dbname="bankingsystem";

					
					$con=mysql_connect($db_host,$db_user,$db_pass);
					
					$db=mysql_select_db($db_dbname,$con);
					
                    $id=$_GET['id'];
                    $delete="UPDATE account_request SET status=2
                                    WHERE ar_id='$id'";
                    $data=mysql_query($delete);
					header('location:basic_table.php?notaccepted');
          }
?>


