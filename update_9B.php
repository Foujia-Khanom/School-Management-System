<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //update
   $sql =  " update tb_student9_business_boy_day set Roll = '$_POST[Roll]',Name = '$_POST[Name]' where Roll = '$_POST[Roll]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view_9B.php");
   else
	   echo "Not update";
   ?>