<?php  ?>
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
                    top: 60%;
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
           
          .button4 a
                {
                    position: absolute;
                    top: 60%;
                    left: 42%;
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
.button5 a
                {
                    position: absolute;
                    top: 60%;
                    left: 26%;
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
           .button5 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
				.button6 a
                {
                    position: absolute;
                    top: 60%;
                    left: 15%;
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
                    top: 60%;
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
 
<center>
<form method="POST" style="text-align:center">

<h3 style="font-size:150%;">Search Your Result</h3>
<h4 style="font-size:120%;"> Search By Roll:</h4>
<input type="text" style="font-size:100%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<article class="article">
<div class="table"><div id="printableArea">
  <table border="1" align="center">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_school";
$Roll="";
if(isset($_POST["search_id"])){
$Roll=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Roll, Name , Shift , Class FROM tb_student where Roll='$Roll'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  


  echo "<tr><th><center>Roll</th><th>Name</th><th>Shift</th><th>Class</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["Roll"]."</td><td>". $row["Name"]. "</td><td>". $row["Shift"]."</td><td>" . $row["Class"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}

mysqli_close($conn);
?> 
</div>
<br>
<center> <input type="button" onclick="printDiv('printableArea')" value="print"/></center>
<script>


}</script>


</div>


</center>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">

</div>
<?php  ?>
<style>
body {
  background-image: url('pic5.jpg');
   background-size: cover;

  
}
</st
