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

$sql="INSERT INTO tb_halfyearly_6a_boy_day(StudentsRoll,Ban1st,Ban2nd,Math,Religious Studies,Bangladesh and World Identities,Home Economics ,Physical Education,General Science,ICT,Eng1st,Eng2nd)VALUES('$_POST[Student's Roll]','$_POST[Ban1st]','$_POST[Ban2nd]','$_POST[Math]','$_POST[Religious Studies]','$_POST[Bangladesh and World Identities]','$_POST[Agriculture]','$_POST[Physical Education]','$_POST[General Science]','$_POST[ICT]','$_POST[Eng1st]','$_POST[Eng2nd]')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>