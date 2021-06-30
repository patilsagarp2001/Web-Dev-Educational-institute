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
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $sql="INSERT into appointment(fname,email,subject,phone,date,time) values(\"".$fname."\" , \"".$email."\" ,\"".$subject."\" , \"".$phone."\" , \"".$date."\" , \"".$time."\");";        
        if($conn->query($sql)===TRUE){
           	 $GLOBALS['conn']->close();
        	echo "<SCRIPT type='text/javascript'> //not showing me this
                                alert('Appointment Booked! You will get reply in some time.');
                                window.location.href='contactus.html';
                            </SCRIPT>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }               
    }
?>