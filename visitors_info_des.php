<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

div.mycontainer {
  width:100%;
  overflow:auto;
  font-size:15px;
}
div.mycontainer div {
  width:50%;
  height:20%;  
  float:left;
  padding:10px;
}

div.count {
  width:100%;
  overflow:auto;
  font-size:15px;
}
div.count div {
  width:32%;
  height:200px;  
  float:left;
  padding:10px;
  margin-left:400px;
  border-radius: 25px;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
  background:url('http://localhost/CPP/Images/bag1.jpg');
  background-size: 1200px;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}



/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
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

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 250px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

.act,.dep,.tot p
{
	font-size:25px;
	font-family:Arial Rounded MT Bold;
	text-align:center;
	color:white;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
  margin-top:50px;
}

</style>
</head>
<body>


<div class="mycontainer">

  <div style="background-color:#FFF4A3;">
    <image src="http://localhost/CPP/mail.png" style="width:30px; height:20px;vertical-align:middle;margin:-13px auto;">
        <p style="margin:-15px auto;margin-left:50px;vertical-align:middle">grwptasgaon.dte@gmail.com</p> 
        <p style="margin:-18px auto;margin-left:310px">Call Us:</p>
        <a href="grwptasgaon.dte@gmail.com" style="margin-left:380px;margin-bottom:10px;">02346-250447/48</a>
  </div>
  
  <div style="background-color:#FFC0C7;vertical-align:middle;height:40px;">
    <p style="margin:4px 150px;"> DTE Code:6014 MSBTE Code:1228</p>
  </div>
  

</div>




<div class="c_head">
<div class="msbte_logo" style="color:brown; font-size:40px;">
<image src="http://localhost/CPP/clg_label.png" style="width:100%; height:30%;">
</div>
</div>
<br>

<div class="navbar">

  <a href="http://localhost/CPP/visitors_info_des.php">Home</a>	
	
	<div class="dropdown">
        <a href="http://localhost/CPP/Daily_report/daily_report.php">Today's Report / आजचा अहवाल
  </div> 
  
  <div class="dropdown">
    <a href="http://localhost/CPP/Datewise_report/datewise_report.php">Datewise Report /
तारखेनुसार अहवाल
  </div> 
  
  <div class="dropdown">
    <a href="http://localhost/CPP/Interval_report/interval_report.php">Spec.Interval Report / विशिष्ट अंतराल अहवाल
  </div> 
	
	<a href="http://localhost/CPP/login_html2.php">Log Out</a>
	
</div>
<br>
<br>





<center><div class="count">


	  
	  <div style="background-color:#5E7D7E;" class="tot">
		<p>Total Entries</p>
			
	<?php

		$conn = new mysqli("localhost", "root", "", "cpp");

		if ($conn->connect_error) 
		{
		die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
		} 
	
		else 
		{
		$sql = "SELECT COUNT(*) AS entry_count FROM visitors_management";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		// Fetch the result
		$row = $result->fetch_assoc();
		echo "<p>" . $row["entry_count"] . "</p>";
		} 
		
		else 
		{
		echo "No entries found in the database";
		}
		
		}

		?>
	  </div>

</div>
</center>



<footer>
  <p>About<br><br>
  <a href="https://www.grwptasgaon.ac.in/contactus.php">Contact Us</a></p>
</footer>

</body>
</html>


