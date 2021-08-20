<html>
<head>
<center>
<h3>Update infrmation </h3>
</head>
<body>
<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " select * from tb_student6a_boy_day";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <table>
   <tr>
   
   <th>Roll</th>
   <th>Name</th>
   <th>Class</th>
   <th>Section</th>


   </tr>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = update_6A.php method=post>";
   echo"<td><input type = number name=Roll value='".$row['Roll']."'></td>";
   echo"<td><input type = text name=Name value='".$row['Name']."'></td>";
  
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">

</div>
</center>
   </html>