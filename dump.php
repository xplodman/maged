<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include_once "connection.php";


   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "usaers";
   $backup_file  = "users.sql";
   $retval= mysqli_query($con, "SELECT * INTO OUTFILE '$backup_file' FROM $table_name;");


   if(! $retval ) {
     die(mysqli_error($con));
   }
   
   echo "Backedup  data successfully\n";
   
   mysql_close($con);
?>