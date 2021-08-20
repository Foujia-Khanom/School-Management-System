<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //update
   $sql =  " update tb_student6d_girl_morning set Roll = '$_POST[Roll]',Name = '$_POST[Name]' where Roll = '$_POST[Roll]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view_6d.php");
   else
	   echo "Not update";
   ?>