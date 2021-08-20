<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_school";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO tb_teacher_day(ID,Name)VALUES('$_POST[ID]','$_POST[Name]')";





if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>