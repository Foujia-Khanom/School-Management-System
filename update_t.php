<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //update
   $sql =  " update tb_teacher_morning set Id = '$_POST[Id]',Name = '$_POST[Name]' where Id = '$_POST[Id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view_t.php");
   else
	   echo "Not update";
   ?>