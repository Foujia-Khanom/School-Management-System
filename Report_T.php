<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <head>   
        <style>
            {
                margin: 0%;
                padding: 0%;
                font-family: Arial, Helvetica, sans-serif;
            }
            body
                {
                    background-image: url(image/bb.jpg);
                    background-position: center;
                    background-size: cover;
                    background-attachment: scroll;
                    height: 100vh;
                }
            
			div#header,  div#footer 
			{
				padding: 20px;
				color: skyblue;
				text-align:center;
				background-color:white;
			}


            .title h1
                {
                    padding-left: 32%;
                    padding-top: 00%;
                    font-size: 3.5em;
                    color: white;
                    backgroud-color:white;					
                }
            
            .button2 a
                {
                    position: absolute;
                    top: 120%;
                    left: 58%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button2 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
            .button3 a
                {
                    position: absolute;
                    top: 120%;
                    left: 48%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
            .button3 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
          .button4 a
                {
                    position: absolute;
                    top: 120%;
                    left: 32%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button4 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   

				.button6 a
                {
                    position: absolute;
                    top: 120%;
                    left: 16%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button6 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
             .button7 a
                {
                    position: absolute;
                    top: 120%;
                    left: 5%;
                    transform: translate(-50%,-50%);
                    font-size: 1.5em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    color: blue;
                    background-color: white;
                }
           .button7 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
        </style>
    </head>
 


<br>
<center><h1 style="color:Green">Search Result by Roll</h1><br><br><br></center>

				<div class="body">
	             <center>
	
	   <br>
				 <form method="post">
	   <input type="text" name="search"/>
	   <input type="submit" name="submit" value="submit"/>
	   <br>
	   </form>
	   </center>
	   <center>
	<div id="pnt">
	<br>
	<div style="background-color:#8080ff;color:blue; padding:30px; width:300px; margin: auto;" align="middle">
	            
				 <h3 style="color:Green">Result</h3><br>
	   <?php	
		$output=NULL;   
	   if(isset($_POST['submit'])){
	   
	   $mysqli = new mysqli("localhost","root","","db_school");
	   
	   $search = $mysqli->real_escape_string($_POST['search']);
	   
	   $resultset=$mysqli->query("select * from tb_halfyarly_6a_boy_day  where SudentsRoll=StudentsRoll and StudentsRoll='$search'");
	   
	   if($resultset->num_rows>0)
	   {
	   		while($rows=$resultset->fetch_assoc())
			{
				$IID=$rows['StudentsRoll'];
				$output= "StudentsRoll = $IID<br>";
				echo $output;
				$NNAME=$rows['Bang1st'];
				$output= "Bang1st = $NNAME<br>";
				echo $output;
				
				$CONN=$rows['Ban2nd'];
				$output= "Ban2nd = $CONN<br>";
				
				$DEPP=$rows['Math'];
				$output= "Math = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['Religious Studies'];
				$output= "Religious Studies = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['Bangladesh and World Identities'];
				$output= "Bangladesh and World Identities = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['Agriculture'];
				$output= "Agriculture = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['Physical Education'];
				$output= "Physical Education = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['General Science'];
				$output= "General Science = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['ICT'];
				$output= "ICT = $DEPP<br>";
				echo $output;
				
				$DEPP=$rows['Eng1st'];
				$output= "Eng1st = $DEPP<br>";
				echo $output;
				$DEPP=$rows['Eng2nd'];
				$output= "Eng2nd = $DEPP<br>";
				echo $output;
				$DEPP=$rows['Total'];
				$output= "Total = $DEPP<br>";
				echo $output;
				
				
			}
	   
	   
	   } else 
	   {
	   	$output="No result";
	   }
	   
	   }
	   
?>
             <br><h3 style="">Thank You</h3>
</div>
                  
				  <br><br>
				  <center>
       <form>
       <input type="submit" value="Print" class="button" onClick="prnt()">
       </form>
	   <br>
<script>
            function prnt(){
                var div=document.getElementById('pnt').innerHTML  ;
                var win=window.open("", "", "width=800,height=500");
                win.document.write(div);
                win.print();
            }
        </script>
		
    <a href="search_half_6a_boy_d.php" class="btn btn-primary"></a>
	</div>
	
	   </body>
	   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">

</div>
	   </html>