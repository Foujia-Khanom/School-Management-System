<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " delete from tb_student10_arts_girl_morning where Roll='$_GET[Roll]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view_10_arts_girl.php");
   else
	   echo "Not deleted";
   ?>