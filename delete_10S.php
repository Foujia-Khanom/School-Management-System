<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //database
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " delete from tb_student10_science_boy_day where Roll='$_GET[Roll]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view_10S.php");
   else
	   echo "Not deleted";
   ?>