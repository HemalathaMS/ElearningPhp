<?php

  require 'includes/common.php';
  session_start();
  $user_id=$_SESSION['user_id'];

  $insert_query="update user_items set status='Billed' where user_id='$user_id'";
  mysqli_query($con,$insert_query) or die(mysqli_error($con));
  header('location:courseDisplay.php');
?>
