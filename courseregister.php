<?php    
    $servername="127.0.0.1:3307";
    $username="root";
    $password="";
    $dbname="feedback_for_institute";    
    $conn = new mysqli($servername,$username,$password,$dbname);   
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $address=$address1." ".$address2;
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['pincode'];
        $country=$_POST['country'];
        $th10percentage=$_POST['th10percentage'];
        $th12percentage=$_POST['th12percentage'];
        $degree=$_POST['degree'];
        $specialization=$_POST['specialization'];

        $sql="INSERT into course_register(fname,lname,dob,gender,email,phone,address,city,state,pincode,country,th10percentage,th12percentage,degree,specialization) values(\"".$fname."\" , \"".$lname."\" , \"".$dob."\" , \"".$gender."\" , \"".$email."\" , \"".$phone."\" , \"".$address."\" , \"".$city."\" , \"".$state."\" , \"".$pincode."\" , \"".$country."\" , \"".$th10percentage."\" , \"".$th12percentage."\" , \"".$degree."\" , \"".$specialization."\");";        
        if($conn->query($sql)===TRUE){
           	 $GLOBALS['conn']->close();
        	echo "<SCRIPT type='text/javascript'> //not showing me this
                                alert('You Successfully Enrolled the Course. Our teams connect you in few time.');
                                window.location.href='homepage.html';
                            </SCRIPT>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }               
    }
?>