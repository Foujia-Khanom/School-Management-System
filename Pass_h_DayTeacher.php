 <!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css"href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.401/js/jquery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br> 
	    <h3>Teacher Login Page</h3><br>
	    <form action="" method="post">
	    	Name : <input type="text" name="Name" required><br><br>
	    	Password : <input type="Password" name="Password" required><br><br>
	    	<input type="submit" name="submit">
	    </form><br>

	    <?php
           if(isset($_POST['submit'])){ 
           	$connection = mysqli_connect("localhost","root","");
           	$db = mysqli_select_db($connection,"db_school");
           	$query = "select * from tb_password where Name = '$_POST[Name]'";
           	$query_run = mysqli_query($connection, $query);
           	while($row = mysqli_fetch_assoc($query_run))
           	{
                  if($row['Name']==$_POST['Name'])
                  {
                  	if($row['Password']==$_POST['Password'])
                  	{
                  		//header("Location : admin_dashboard.php");
                  		header("Location:All_Student_d_Result_half.php");
                  	}
                  	else
                  	{
                  		echo "Wrong Password";
                  	}
                  }
                  else
                  {
                  	echo "Wrong Email ID";
                  }
           	}
           }    
	    ?>
	</center>
    
</body>
</html>