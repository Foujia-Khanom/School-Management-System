<?php
   $conn = mysqli_connect('localhost','root','','db_school');
if(!$conn){

    echo"Error!";

 
"SELECT StudentsRoll,Ban1st ,Ban2nd,Math ,ReligiousStudies ,BangladeshandWorldIdentities,Agriculture,PhysicalEducation,GeneralScience ,ICT,Eng1st,Eng2nd, sum(Ban1st+Ban2nd+Math+ReligiousStudies+BangladeshandWorldIdentities+Agriculture+PhysicalEducation+GeneralScience+ICT+Eng1st+Eng2nd ) as Total from tb_halfyearly_6a_boy_day group by Students Roll;



?>