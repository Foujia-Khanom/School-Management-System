<?php
   $conn = mysqli_connect('localhost','root','','db_school');// connection diye nish query thik ase just amader moto edit korte hobe 
if(!$conn){

    echo"Error!";
}
 
$result ="SELECT StudentsRoll,Ban1st ,Ban2nd,Math ,ReligiousStudies ,BangladeshandWorld Identities,HomeEconomics,PhysicalEducation,GeneralScience ,ICT ,Eng1st,Eng2nd, sum(Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd ) as Sum from tb_halfyearly_6a_boy_day group by StudentsRoll";

while ($row=mysqli_fetch_array($result))
 {
          $field1name = $row["col1"];
        $field2name = $row["col2"];        //eita dmmyeivabe print korte parbi 
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
         echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field5name.'<br />';
        echo $field5name.'<br />';
        echo $field5name;

}
?>
//$show_result=mysqli_fetch_array($result);
 
//echo "Total sum: ".$show_reTotal'];