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

$sql="INSERT INTO tb_halfyearly_6a_boy_day(StudentsRoll,Ban1st,Ban2nd,Math,ReligiousStudies,BangladeshandWorld Identities,HomeEconomics ,PhysicalEducation,GeneralScience,ICT,Eng1st,Eng2nd,Sum)VALUES('$_POST[StudentsRoll]','$_POST[Ban1st]','$_POST[Ban2nd]','$_POST[Math]','$_POST[ReligiousStudies]','$_POST[BangladeshandWorld Identities]','$_POST[HomeEconomics]','$_POST[PhysicalEducation]','$_POST[GeneralScience]','$_POST[ICT]','$_POST[Eng1st]','$_POST[Eng2nd]','$_POST[Sum]')";





if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>