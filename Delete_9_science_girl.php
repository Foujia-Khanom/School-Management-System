<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " delete from tb_student9_science_girl_morning where Roll='$_GET[Roll]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view_9_science_girl.php");
   else
	   echo "Not deleted";
   ?>