


<?php
   $conn = mysqli_connect('localhost','root','','db_school');// connection diye nish query thik ase just amader moto edit korte hobe 
if(!$conn){

    echo"Error!";
}
 
$result ="SELECT StudentsRoll,
  Ban1st ,Ban2nd,Math ,ReligiousStudies ,BangladeshandWorld Identities,HomeEconomics,PhysicalEducation,GeneralScience ,ICT ,Eng1st,Eng2nd, sum(Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd ) as 
   Sum , (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 as Average, CASE
     WHEN (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 80.00 AND  100.00 THEN 'A+'
 WHEN (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 70.00 AND 79.99 THEN 'A'
  WHEN (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 60.00 AND 69.99 THEN 'A-'
   WHEN(Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 50.00 AND 59.99 THEN 'B'
    WHEN (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 40.00 AND 49.99 THEN 'C'
     WHEN(Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd )/11.00 BETWEEN 33.00 AND 39.99 THEN 'D' ELSE 'FAIL' END AS grade from tb_halfyearly_6a_boy_day GROUP BY StudentsRoll ORDER BY (Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorld Identities+HomeEconomics+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd)/11.00 DESC ";

while ($row=mysqli_fetch_array($result))
 {
  /// eikhane column er  jonno instruction dite hobe print er kaaj hobe jeheto dummy data use tai r kichu dilam na
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
 
//echo "Total sum: ".$show_result['Sum'];final.php
Displaying final.php.