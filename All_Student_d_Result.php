<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Class 6 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="show_d_6A.php">Section A</a>
      <a href="show_d_6B.php">Section B</a>
      
    </div>
	
	</div>
	<div class="dropdown">
    
    <button class="dropbtn">Class 7 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="show_d_7A.php">Section A</a>
      <a href="show_d_7B.php">Section B</a>
      
    </div>
	
	</div>
	<div class="dropdown">
    <button class="dropbtn">Class 8 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="show_d_8A.php">Section A</a>
      <a href="show_d_8B.php">Section B</a>
      
    </div>
	
	</div>
	<div class="dropdown">
    <button class="dropbtn">Class 9 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="show_d_9S.php">Science</a>
      <a href="show_d_9A.php">Arts</a>
	  <a href="show_d_9B.php">Business Studies</a>
      
    </div>
	
	</div>
	<div class="dropdown">
    <button class="dropbtn">Class 10 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="show_d_10S.php">Science</a>
      <a href="show_d_10A.php">Arts</a>
	  <a href="show_d_10B.php">Business Studies</a>
      
    </div>
	
	</div>

            

			

</body>
</html>
