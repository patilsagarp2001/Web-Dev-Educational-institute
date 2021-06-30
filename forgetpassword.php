

  <?php  
    use PHPMailer\PHPMailer\PHPMailer; 
    $servername="127.0.0.1:3307";
    $username="root";
    $password="";
    $dbname="All_admin_for_institute";    
    $conn = new mysqli($servername,$username,$password,$dbname); 
    session_start();   
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    } 
    if (isset($_POST['reqpass'])){
      $username=$_POST['email'];

      $sql="SELECT * FROM admindata WHERE username = '$username'";
      $select = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($select);

      if(is_array($row)){
        //$_SESSION['username']=$row['username'];
        //$_SESSION['password']=$row['password'];
        $to=$username;
        $subject='Your Password';
        $header='From: sagarpatilsr91@gmail.com';
        $message='Your Password is '.$password.'. Please do not share with other';
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        echo "<script>alert('Now the next step is mail.');</script>";
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "sagarpatilsr91@gmail.com";
        $mail->Password = "7621808562";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        
        if(mail($to,$subject,$message,$header)){
          echo "mail send";
        }
        else{
          echo "Email Failed.";
        }
      }
      else{
        echo "<script>
                  window.location.href = 'forgetpassword.html';
                  alert('Invalid Email Id. This user is not in our data.');
                </script>";
      }
    }
?>

