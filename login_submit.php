<?php
require 'includes/common.php';
    $count=0;
    if(isset($_POST['submit'])){
      if(isset($_POST['email']) && isset($_POST['password'])){

        $password=mysqli_real_escape_string($con,$_POST['password']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $pass=md5($password);
        $select_query="Select id,name,email,fingerprint from users where email='$email' and password='$pass'";

        $result=mysqli_query($con,$select_query) or die(mysqli_error($con));

        $select_from_attable="Select fingerprint from attable";

        $resultAttable=mysqli_query($con,$select_from_attable) or die(mysqli_error($con));
        $row=mysqli_fetch_array($result);
        while($row1=mysqli_fetch_array($resultAttable)){
          if($row1['fingerprint']==$row['fingerprint']){
            $count=1;
          }
        }

        $count=1;

        if($count==0 || mysqli_num_rows($result)==0){
          header('location:login.php?error=Invalid email or password or fingerprint');
        }
        else if($count==1){
          session_start();
          $_SESSION['user_id']=$row['id'];
          $_SESSION['uname']=$row['name'];
          $_SESSION['email']=$row['email'];
          echo $_SESSION['uname'];
          echo $_SESSION['email'];
          header("location:courseDisplay.php");
        } 

        

      }
    }
 ?>
