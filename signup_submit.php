<?php
  require 'includes/common.php';
$name=$_POST['name'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$repassword=mysqli_real_escape_string($con,$_POST['repwd']);
$pass=md5($password);
$repass=md5($repassword);

$contact=$_POST['contact'];
$city=$_POST['city'];
if($pass==$repass){
  $select_query="Select id,name,email from users where email='$email'";
  $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
  if(!(mysqli_num_rows($result)>0)){
    $insert_query="Insert into users(name,email,password,phoneNumber,city) values ('$name','$email','$pass','$contact','$city')";
    mysqli_query($con,$insert_query) or die(mysqli_error($con));
    session_start();
      $select_query1="Select id,email from users where email='$email'";
      $result1=mysqli_query($con,$select_query1) or die(mysqli_error($con));
      $row=mysqli_num_rows($result1);
    $_SESSION['user_id']=$row['id'];
    $_SESSION['email']=$row['email'];
    $_SESSION['uname']=$row['name'];
    header('location:courseDisplay.php');

  }
  else{
    header('location:register.php?email_error=Username exists');
  }
}
else{
  header('location:register.php?repwd_error=Password doesn\'t match');
}

?>
