<?php    
    $servername="127.0.0.1:3307";
    $username="root";
    $password="";
    $dbname="All_admin_for_institute";    
    $conn = new mysqli($servername,$username,$password,$dbname); 
    session_start();   
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    } 
    if (isset($_POST['login'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      echo MD5($password);

      $sql="SELECT * FROM admindata WHERE username = '$username' AND password = '$password' ";
      $select = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($select);

      if(is_array($row)){
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
      }
      else{
        echo "<script>
                  window.location.href = 'admin.html';
                  alert('Invalid UserID or Password');
                </script>";
      }
    }
    if (isset($_SESSION['username'])){
      header('location:afteradminlog.php');
    }
?>