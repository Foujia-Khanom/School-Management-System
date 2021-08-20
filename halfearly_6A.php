<?Php

require "config.php"; // Database connection

$count="SELECT roll,name,Ban_1st,Ban_2nd,Eng_1st, Eng_2nd,Math,ICT,Bangaladesh_and_World_Identities,Science,Religious_Studies,Agriculture sum(Banla1st+Bangla2nd+English1st + English2nd+Math+ICT+Bangaladesh_and_World_Identities+Science+Religious_Studies+Agriculture) as Total from student_sum group by roll";

echo "<table>";
echo "<tr><th>id</th><th>name</th><th>Bangla</th><th>English</th><th>Math</th><th>total</th></tr>";

foreach ($dbo->query($count) as $row) {
echo "<tr ><td>$row[roll]</td><td>$row[name]</td><td>$row[Ban1st]</td><td>$row[Ban2nd]</td><td>$row[Eng1st]</td><td>$row[Eng2nd]</td><td>$row[Math]</td><td>$row[ICT]</td><td>$row[Bangaladesh_and_World_Identities]</td><td>$row[Science]</td><td>$row[Religious_Studies]</td>td>$row[Agriculture]</td><td>$row[total]</td></tr>";
}
echo "</table>";
?>