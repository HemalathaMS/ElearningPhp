<?php
  session_start();
  require'includes/common.php';
  $id=$_GET['id'];
  $user_id=$_SESSION['user_id'];
  $delete_query="delete from user_items where user_id='$user_id' and item_id='$id'";
  mysqli_query($con,$delete_query) or die(mysqli_error($con));
  header('location:cart.php');
?>
