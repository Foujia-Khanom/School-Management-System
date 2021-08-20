<html>
<head>
<center>
<h1>Student Information  </h1>
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
                    top: 80%;
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
           .button2 a:hover
                {
                    background-color: black;
                    color: yellow;
                }   
            .button3 a
                {
                    position: absolute;
                    top: 80%;
                    left: 38%;
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
          
.button5 a
                {
                    position: absolute;
                    top: 80%;
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
                    top: 80%;
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
                    top: 80%;
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

<h5>
<table border= 1 cellpadding =1 cellspacing =1>
   <tr>
   
   <th>Roll</th>
   <th>Name</th>

   
   <th>Delete</th>
   <th>Update</th>
   </tr>
   
   <?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'db_school');
   //select
   $sql =  " select * from tb_student7a_boy_day ";
   //execute
   $records=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($records))
   {
   echo"<tr>";
   echo"<td>".$row['Roll']."</td>";
    echo"<td>".$row['Name']."</td>";
	
	 
	   
	 echo "<td><a href=delete_7A_d.php?Roll=".$row['Roll'].">Delete</a></td>";
	  echo "<td><a href=up_7A_d.php?Roll=".$row['Roll'].">Update</a></td>";
   }
   ?>
   </table>
   </center>
   </h5>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<p>&copy; Created by Foujia Kjanom,Tanjina Aktar,Rabeya Basri</p>
</div>
</html>