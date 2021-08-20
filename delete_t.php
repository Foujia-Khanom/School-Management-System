<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " delete from tb_teacher_morning where Id='$_GET[Id]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view_T.php");
   else
	   echo "Not deleted";
   ?>