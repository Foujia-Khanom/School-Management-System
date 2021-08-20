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

$sql="INSERT INTO tb_student(Roll,Name,Shift,Class,Section)VALUES('$_POST[Roll]','$_POST[Name]','$_POST[Shift]','$_POST[Class]','$_POST[Section]')";





if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>