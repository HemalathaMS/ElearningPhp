<?php

  require 'includes/common.php';
  session_start();
  $user_id=$_SESSION['user_id'];

  $insert_query="update user_items set status='Order Confirmed' where user_id='$user_id' and status != 'Billed'";
  mysqli_query($con,$insert_query) or die(mysqli_error($con));
  header('location:bill.php');
?>
