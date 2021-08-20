<?php
$conn = mysqli_connect('localhost','root','','db_school');
if(!$conn){

    echo"Error!";
}
$query ="SELECT StudentsRoll,Ban1st,Ban2nd,Math,sum(Ban1st+Ban2nd+Math) as 'Sum' from tb_halfyearly_6A_boy_day group by StudentsRoll";
$result=mysqli_query($conn, $query);
echo "<table>";
while ($row=mysqli_fetch_array($result))
 {
	$show_result=$row[4];
	echo "<tr>";
	echo "<td> {$show_result} </td>";
	echo "</tr>";

}
echo "</table>";

//$show_result=mysqli_fetch_array($result);
 
//echo "Total sum: ".$show_result['Total'];
