<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor's Registraion</title>
</head>

<style>

body
		{
			text-align:center;
			background:#c5cae9;
		}

label
		{
			width: 200px;
            height: 25px;
			margin: 20px auto;
			margin-right:280px;
			margin-left:130px;
		}

input[type="text"]
		{
			width: 200px;
            height: 25px;
			margin: 20px 50px;
			padding-left:10px;
			margin-left:200px;
			margin-right:50px;
		}
		

select
		{
			width: 200px;
            height: 25px;
			margin: -44px 654px;
			padding-left:10px;
			
		}

		
		
.headquote
		{
			font-size:22px;
			color:#fff;
			padding-top:10px;
			
		}
		
.container
		{
			background:#607d8b;
			height:50px;
			padding-right:40px;
			padding-left:40px;
		}
		
.form
		{
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			height:450px;
			width:1000px;
			padding-top:40px;
			
		}
input[type="radio"]
		{
			display:inline-block;
			width: 30px;
            height: 15px;

			margin: auto 190px;
			margin-right:10px;
			margin-top:-70px;
		}
	
	.it
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:100px;
		}
		
	.co
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:450px;
			margin-top:-320px;
		}
		
	.ej
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:800px;
			margin-top:-320px;
		}
		
	.ee
	
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:100px;
			margin-top:50px;
		}
		
	.dd
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:0px;
			margin-top:-320px;
		}
		
	.ce
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:800px;
			margin-top:-320px;
		}
		
	.me
	
		{
			width:300px;
			height:300px;
			background:#e8eaf6;
			box-shadow:0px 2px 5px 0px;
			margin-left:450px;
			margin-top:50px;

		}
		
	
		
</style>
<center>
<body>

<div class="container">
	<marquee class="headquote">Government Residence Women Polytechnic Tasgaon
	</marquee>
</div>

<br><br><meta name="viewport" content="width=device-width, initial-scale=1.0">
	<image src="msbte.png" height="140px" width="140px">
</center>
    <form name="registration" method="post" action="#">
        <h1><center><u>Visitor's Registraion</u></center></h1><br>
	
	<center>
	<div class="form">
	
	<table>	
	
	<tr>
	<td>
        <b><label for="name"> Name:</label>  <label for="gender">Gender:</label></b>
		
		<br>
        <input type="text"name="name"id="name" onclick="voice_nm()" required="true">
		
		
		
		<input type="radio" value="Male" id="m" name="gender"/>Male<input type="radio" value="female" id="fm" name="gender" style="margin:0px auto;"/>Female<input type="radio" value="other" id="o" name="gender" style="margin:0px auto;"/>Other
		
        
	</td>
	</tr>
	
	<tr>
	<td>
        <b><label for="city">Village:</label><label for="category">Category:</label></b>
		<br>
		
        <input type="text"name="city" id="city" onclick="voice_cty()"required="true">
    
		<select name="category" required="true">
		<option>Parents</option>
		<option>Visiting_faculty</option>
		<option>Other</option>
		</select>
	
	</td>
	</tr>
	

	
	<tr>
	<td>
        <b><label for="mobile no">Mobile:</label><label for="vehicle no">Vehicle No:</label></b>
		<br>
		
        <input type="text" name="mn" id="mobile" onclick="voice_mob()" onblur="validation()" required="true">
        
        
        <input type="text" name="vn" id="vehicle" onclick="voice_vhcl()" onblur="validateVehicleNumber()" required="true">
       
	</td>
	</tr>
	
	<tr>
	<td>
       <b><label for="file" style="margin-left:450px">Upload selfie:</label><br><br><br>
        <input type="file" name="selfie" required="true" style="margin-left:400px"/>
        <br><br>
	</td>
	</tr>
	
	
	<tr>
	<td>
        <b><br>
        <button name="submit" style="margin-left:460px ; width:100px; height:25px" >SUBMIT</submit>
        <br><br>
	</td>
	</tr>
	
	
	</table>	
	</div>
	</center>
	</form>
	
	<h2>Contact</h2>

	
	<div class="it">
	<h3>IT</h3>
	HOD<br>
	Smt. A.D.Khirsagar  <a href="tel:+919689071999" >9689071999</a><br><br><br>
	FY Warden<br>
	Mr. A.Hasorikar  <a href="tel:+917588813290" >7588813290</a><br><br>
	SY Warden<br>
	Smt. P.D.Wadkar  <a href="tel:+918308095641" >8308095641</a><br><br>
	TY Warden<br>
	Smt. A.D.Khirsagar  <a href="tel:+919689071999" >9689071999</a><br><br>
	</div>

	
	<div class="co">
	<h3>CO</h3>
	HOD<br>
	Smt. N.A.Inamdar  <a href="tel:+917709307876" >7709307876</a><br><br><br>
	FY Warden<br>
	Dr. S.A.Jamdade  <a href="tel:+919075158555" >9075158555</a><br><br>
	SY Warden<br>
	Mr. S.S.Bhosale  <a href="tel:+917507283140" >7507283140</a><br><br>
	TY Warden<br>
	Smt. N.A.Inamdar  <a href="tel:+917709307876" >7709307876</a><br><br>
	</div>
	
	
	<div class="ej">
	<h3>EJ</h3>
	HOD<br>
	Mr. S.B.Patil  <a href="tel:+919893297922" >9893297922</a><br><br><br>
	FY Warden<br>
	Smt. U.S.Kamble  <a href="tel:+919766252441" >9766252441</a><br><br>
	SY Warden<br>
	Mr. S..Kavitkar  <a href="tel:+918149469985" >8149469985</a><br><br>
	TY Warden<br>
	Mr. G.S.Choudhari  <a href="tel:+919022721093" >9022721093</a><br><br>
	</div>
	
	
	<div class="ee">
	<h3>EE</h3>
	HOD<br>
	Smt. P.M.Shinde  <a href="tel:+918177834257" >8177834257</a><br><br><br>
	FY Warden<br>
	Mr. T.G.Dhanke  <a href="tel:+919767387989" >9767387989</a><br><br>
	SY Warden<br>
	Smt. P.N.Yewale  <a href="tel:+918390283788" >8390283788</a><br><br>
	TY Warden<br>
	Smt. P.M.Shinde  <a href="tel:+918177834257" >8177834257</a><br><br>
	</div>
	
	<center><div class="dd">
	<h3>DD</h3>
	HOD<br>
	Smt. M.A.Puranik  <a href="tel:+919860525692" >9860525692</a><br><br><br>
	FY Warden<br>
	Smt. M.A.Puranik  <a href="tel:+919860525692" >9860525692</a><br><br>
	SY Warden<br>
	Smt. K.S.Kulkarni  <a href="tel:+918796182023" >8796182023</a><br><br>
	TY Warden<br>
	Mr. ..Ghodmare  <a href="tel:+919370632995" >9370632995</a><br><br>
	</div></center>
	
	
	<div class="ce">
	<h3>CE</h3>
	HOD<br>
	Dr. T.M.Jadhav  <a href="tel:+91" ></a><br><br><br>
	FY Warden<br>
	Smt. M.A.Puranik  <a href="tel:+919860525692" >9860525692</a><br><br>
	SY Warden<br>
	Smt. K.S.Kulkarni  <a href="tel:+918796182023" >8796182023</a><br><br>
	TY Warden<br>
	Mr. ..Ghodmare  <a href="tel:+919370632995" >9370632995</a><br><br>
	</div>
	
	<div class="me">
	<h3>ME</h3>
	HOD<br>
	Dr. V.M.Kulakarni <a href="tel:+919371228990" >9371228990</a><br><br><br>
	TY Warden<br>
	Mr. ..Gaikwad  <a href="tel:+919860906117" >9860906117</a><br><br>
	</div>
	
	
	
	
</body>
<script>
var nm=document.getElementById("name");
var cty=document.getElementById("city");
var mob=document.getElementById("mobile");
var vhcl=document.getElementById("vehicle");


function voice_nm() {
    var recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!recognition) {
        alert("Speech recognition not supported in this browser");
        return;
    }

    recognition = new recognition(); // Instantiate the appropriate SpeechRecognition object
    recognition.lang = "en-GB";
    recognition.onresult = function(event) {
        var transcript = event.results[0][0].transcript;
		        nm.value = transcript;
    }
    recognition.start();
}

function voice_cty() {
    var recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!recognition) {
        alert("Speech recognition not supported in this browser");
        return;
    }

    recognition = new recognition(); // Instantiate the appropriate SpeechRecognition object
    recognition.lang = "en-GB";
    recognition.onresult = function(event) {
        var transcript = event.results[0][0].transcript;
		        cty.value = transcript;
    }
    recognition.start();
}

function voice_mob() {
    var recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!recognition) {
        alert("Speech recognition not supported in this browser");
        return;
    }

    recognition = new recognition(); // Instantiate the appropriate SpeechRecognition object
    recognition.lang = "en-GB";
    recognition.onresult = function(event) {
        var transcript = event.results[0][0].transcript;
		        mob.value = transcript;
    }
    recognition.start();
}

function voice_vhcl() {
    var recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!recognition) {
        alert("Speech recognition not supported in this browser");
        return;
    }

    recognition = new recognition(); // Instantiate the appropriate SpeechRecognition object
    recognition.lang = "en-GB";
    recognition.onresult = function(event) {
        var transcript = event.results[0][0].transcript;
		        vhcl.value = transcript;
    }
    recognition.start();
}

function voice_nm() {
    var recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!recognition) {
        alert("Speech recognition not supported in this browser");
        return;
    }

    recognition = new recognition(); // Instantiate the appropriate SpeechRecognition object
    recognition.lang = "en-GB";
    recognition.onresult = function(event) {
        var transcript = event.results[0][0].transcript;
		        nm.value = transcript;
    }
    recognition.start();
}

function validation()
{
	var mobno_reg = /^[0-9]{10}$/;
            
            if (!mobno_reg.test(mob.value)) {
                alert("Invalid mobile number!");
            } 
		
}

function validateVehicleNumber() {
    var vehicleNumberRegex1 = /^[A-Z]{2}\d{2}[A-Z]{2}\d{4}$/;

    if (!vehicleNumberRegex1.test(vhcl.value) && vhcl.value !== "no") {
        alert("Invalid vehicle number!");
    }
}
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = filter_input(INPUT_POST, "name");
    $city = filter_input(INPUT_POST, "city");
    $mob = filter_input(INPUT_POST, "mn");
    $vhno = filter_input(INPUT_POST, "vn");
    $gender = filter_input(INPUT_POST, "gender");
    $category = filter_input(INPUT_POST, "category");
    $selfie = filter_input(INPUT_POST, "selfie");

    date_default_timezone_set('Asia/Colombo');

    $currentdate = date("Y-m-d");
    $currenttime = date("h:i:s A");


    $conn = new mysqli("localhost", "root", "", "cpp");

    if ($conn->connect_error) {
        die('Connect Error (' . $cond-m-yn->connect_errno . ') ' . $conn->connect_error);
    } else {
        $sql = "INSERT INTO visitors_management (V_Name, Gender, City, Category, Mobile, Vehicle_no,Entry_type, Image,Date,Arr_Time,Flag) VALUES ('$name','$gender','$city','$category','$mob','$vhno','In','$selfie','$currentdate','$currenttime',1)";

        if ($conn->query($sql)) {
            $lastInsertedID = $conn->insert_id; // Get the last inserted ID
            ?>
            <script>
                toastr.options = {
                    closeButton: true,
                    progressBar: false,
                    preventDuplicates: true,
                    positionClass: "toast-bottom-right",
                    showDuration: "30000", // Set a long duration so the notification stays until user action
                    hideDuration: "1000",
                    timeOut: "0", // Disable auto-close
                    extendedTimeOut: "0", // Disable auto-close
                    tapToDismiss: false
                };

                toastr.info('ID:<?php echo $lastInsertedID ?>', {escapeHtml: false});
            </script>
            <?php
            echo "New record is inserted. \nID: " . $lastInsertedID;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>


</html>
