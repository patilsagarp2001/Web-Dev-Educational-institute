<?php
session_start();
    $servername="127.0.0.1:3307";
    $username="root";
    $password="";
    $dbname="feedback_for_institute";    
    $conn = new mysqli($servername,$username,$password,$dbname);    
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>ADMIN LOGIN</title>
	<!link rel="stylesheet" type="text/css" href=".\admincss.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><!/script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
	
.one{
  background-color: #0a1c57;
  color:white;
  //position: fixed;
}
.homelink{
	font-weight: bold;
	font-size: 120%;
	background-color: white;
	color:#0a1c57;
	
}
.logoutbutton, .printbutton{
	float:right;
	background-color: #0a1c57;
	font-size: 120%;
	font-weight: bold;
	color: white;
}

div{
	//border:1px solid red;
}
.username-name{
	font-weight: bold;
	font-size: 130%;
}

.button1, .button2, .button3{
	width: 33.33333333%;
	background-color: #f8d02f;
	border: none;
	font-size: 120%;
	font-weight: bold;
	color: #0a1c57;

}
.button2, .button3{
	opacity: 50%;	
}
.sidebutton1{
	width: 50%;
	background-color: #f8d02f;
	border: none;
	font-size: 120%;
	font-weight: bold;
	color: #0a1c57;
}
.sidebutton2{
	width: 50%;
	background-color: #f8d02f;
	border: none;
	font-size: 120%;
	font-weight: bold;
	color: #0a1c57;
	opacity: 50%;
	float: right;
}
#show1, #show2, #show, #show0{
	background-color: #f8d02f;
}
#show0{
	overflow-x: auto;	

}

table{
	background-color: white;
	padding-top: 10px;
	overflow-x: auto;
}

th{
  position: sticky;
  top: 0;
  background-color: #0a1c57;
  color: white;
}
tbody{
	overflow-y: auto;
}
@media (max-width: 400px) {
.button1,.button2,.button3,.username-name{
	font-size: 100%;
}
}
</style>
</head>
<body>
<div style="position:fixed;z-index:9999;" class="w-100">
	<div class="row mx-auto one">
		<div class="col-lg-3 offset-1">
		</div>
		<div class="col-lg-3"></div>
		<div class="col-lg-4">
			<i class="fas fa-phone" style="color:#f8d02f;"></i>&nbsp +91 8612764081 | <i class="fas fa-envelope" style="color:#f8d02f;"></i>&nbsp info@example.com
		</div>	
	</div>
	<div class="row mx-auto py-1" style="overflow-x:auto;background-color: white;">
		<div class="col-lg-6 py-2">
			<div class="username-name" style="">
				<?php  
					echo "Welcome ";
					echo $_SESSION['username'];
				?>
			</div>
		</div>
		<div class="col-lg-2 offset-3 py-2">
			<button class="logoutbutton px-3 py-1" onclick="window.location.href='logout.php'">Log Out &nbsp <i class="fa fa-sign-out-alt"></i></button>
		</div>
	</div>
</div>
<div style="padding-top:200px;background-color:#0a1c57;color:white;">
	<div class="container">
		<h4>EKIRA</h4>
		<h1>Admin</h1>
		<p><i class="fa fa-home"></i>  Home &nbsp <i class="fa fa-chevron-right"></i> &nbsp <i class="fa fa-user"></i> &nbspAdmin Login</p>
		<hr style="border-top:4px solid #f8d02f;width: 10%;margin-left: 0px;">
		<br>
	</div>	
</div>
<br>
<div class="container-fluid mx-auto p-0">
	<div class="container p-0 mx-auto side1">
		<div class="btn-group mx-auto" style="width:100%">
			<button class="button1 mx-0 py-3"  id="temp1" onclick="buttonclick('feedback_list')">Feedback List</button>
			<button class="button2 mx-0 py-3"  id="temp2" onclick="buttonclick('appointment_list')">Appointment List</button>
			<button class="button3 mx-0 py-3"  id="temp3" onclick="buttonclick('Course_registered_list')">Course Registered</button>
		</div>
	</div>
	<div class="d-flex justify-content-center py-1" id="show">
		<div id="show0" class="my-5">
			<div id="show1">
				<div class="" style="overflow-x: auto;">
					<?php   
						$sql1 = "SELECT * FROM feedback";    
						$result1 = $conn->query($sql1);    
						if($result1->num_rows > 0){
						    echo "<table class='table table-striped'><thead><tr><th>SR NO.</th><th>Name</th><th>Email Id</th><th>Subject</th><th>Phone No.</th><th>Message</th></tr></thead><tbody>";
						    while($row = $result1-> fetch_assoc() ) {
						        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["phone"]."</td><td>".$row["message"]."</td></tr>";
						    }
						    echo "</tbody></table>";
						}else {
						    echo "0 results";
						} 
					?>
				</div>
			</div>
			<div id="show2" style="display:none;">
				<div class="" style="overflow-x: auto;">
					<?php   
						$sql1 = "SELECT * FROM appointment";    
						$result1 = $conn->query($sql1);    
						if($result1->num_rows > 0){
						    echo "<table class='table table-striped'><thead><tr><th>SR NO.</th><th>Name</th><th>Email Id</th><th>Subject</th><th>Phone No.</th><th>Date</th><th>Time</th></tr></thead><tbody>";
						    while($row = $result1-> fetch_assoc() ) {
						        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["phone"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
						    }
						    echo "</tbody></table>";
						}else {
						    echo "0 results";
						}
						//$conn->close(); 
					?>
				</div>
			</div>
			<div id="show3" style="display:none;">
				<div class="" style="overflow-x: auto;">
					<?php   
						$sql1 = "SELECT * FROM course_register";    
						$result1 = $conn->query($sql1);    
						if($result1->num_rows > 0){
						    echo "<table class='table table-striped'><thead><tr><th>SR NO.</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Email Id</th><th>Phone No.</th><th>Address</th><th>City</th><th>State</th><th>Pincode</th><th>Country</th><th>10th Percentage</th><th>12th Percentage</th><th>Degree</th><th>Specialization</th></tr></thead><tbody>";
						    while($row = $result1-> fetch_assoc() ) {
						        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["pincode"]."</td><td>".$row["country"]."</td><td>".$row["th10percentage"]."</td><td>".$row["th12percentage"]."</td><td>".$row["degree"]."</td><td>".$row["specialization"]."</td></tr>";
						    }
						    echo "</tbody></table>";
						}else {
						    echo "0 results";
						}
						//$conn->close(); 
					?>
				</div>
			</div>
		</div>
		
	</div><br>
	<button class="printbutton p-2" onclick="PrintDiv()"><i class="fa fa-download"></i> Save to Device</button>
	<br><br><br>
</div>

<?php

$conn->close();

?>


<script type="text/javascript">
	function buttonclick(temp){
		if (temp=='feedback_list'){
			show1.style.display='block';
			show2.style.display='none';
			show3.style.display='none';
			temp1.style.opacity='100%';
			temp2.style.opacity='50%';
			temp3.style.opacity='50%';
		}
		if (temp=='appointment_list'){
			show1.style.display='none';
			show2.style.display='block';
			show3.style.display='none';
			temp1.style.opacity='50%';
			temp2.style.opacity='100%';
			temp3.style.opacity='50%';
		}
		if (temp=='Course_registered_list'){
			show1.style.display='none';
			show2.style.display='none';
			show3.style.display='block';
			temp1.style.opacity='50%';
			temp2.style.opacity='50%';
			temp3.style.opacity='100%';
		}
	}


	function PrintDiv() {  
	     var printContents = document.getElementById("show0").innerHTML;
	     var originalContents = document.body.innerHTML;
	     if (show1.style.display=='' || show1.style.display=='block'){
	     	document.body.innerHTML = '<br><h1>Feedback Data List</h1><br><br>'+printContents;
	  
	     }
	     else if (show2.style.display=='' || show2.style.display=='block'){
	     	document.body.innerHTML = '<br><h1>Appointment Data List</h1><br><br>'+printContents;
	     
	     }
	     else{
	     	document.body.innerHTML = '<br><h1>Course Registered Data List</h1><br><br>'+printContents;
	  
	     }
	     
	     window.print();

	     document.body.innerHTML = originalContents; 
    }
</script>
</body>
</html>