<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  background-color: skyblue;
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
<div class="navbar">
  <a href="Pass_Headmaster.php">Headmaster</a>
  <a href="Pass_ClassTeacher.php">Class Teacher</a>
  <div class="dropdown">
    <button class="dropbtn">Morning Shift
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Pass_MornTeacher.php">Half Yearly</a>
      <a href="Pass_MornTeacher.php">Annual</a>
    </div>
   
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Day Shift
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Pass_h_DayTeacher.php">Half Yearly</a>
      <a href="Pass_h_DayTeacher.php">Anual</a>
    </div>
</div>

</body>
</html>