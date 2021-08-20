<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //database
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " delete from tb_student9_business_boy_day where Roll='$_GET[Roll]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=view_9B.php");
   else
	   echo "Not deleted";
   ?>