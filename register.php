<?php session_start(); ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>H Square-Register</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    @media (min-width:320px)and (max-width:991px){
      h1{
        padding-top: 2rem;
      }
      .form-control{
        width:118%;
      }
    }
    @media (min-width:992px) and (max-width:1199px)
    {
      .form-control{
        width:105%;
      }
    }
    @media (min-width:1200px) and (max-width:1700px)
    {
      .form-control{
        width:100%;
      }
    }
    @media (min-width:320px)and (max-width:650px){
      .registerForm{
        margin-top: 3rem !important;
        width: 78%;
        margin: auto 1rem;
      }
    }
    @media (min-width:651px)and (max-width:900px){
      .registerForm{
        margin-top: 3rem !important;
        width: 57%;
        margin: auto 7rem;
      }
    }
    @media (min-width:901px)and (max-width:1200px){
      .registerForm{
        margin-top: 3rem !important;
        width: 48%;
        margin: auto 12rem;

      }
    }
    @media (min-width:901px)and (max-width:1200px){
      .registerForm{
        margin-top: 8rem !important;
        width: 48%;
        margin: auto 15rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<br>
<div class="registerForm container">
<h1 style="color:#989c9e;" align="center"> Register </h1><br>
<form method="post" action="signup_submit.php" >

      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Name" pattern="*[A-Za-z]" required >
      </div>
      <p style="color:red">
        <?php if(isset($_GET['email_error'])){
          echo $_GET['email_error'];
        } ?>
      </p>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" pattern="*[A-Za-z_-!#$%^*]+@[A-Za-z]+\.[A-Za-z]{2,3}" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
      </div>
      <p style="color:red">
        <?php if(isset($_GET['repwd_error'])){
          echo $_GET['repwd_error'];
        } ?>
      </p>
      <div class="form-group">
        <input type="password" class="form-control" name="repwd" placeholder="Retype password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}" required>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="city" placeholder="City" pattern="*[A-Za-z]" required>
      </div>
      
      <div class="form-group radio" style="color:#585858">
        <p>Are You?</p>
        <nobr><input type="radio" name="isTeacher" value="student" checked>Student
        <input type="radio" name="isTeacher" value="instructor">Instructor</nobr>
      </div>
      <center>
      <div class="form-group">
        <nobr><input type="submit" class="btn btn-primary" value="Submit">&emsp;
        <input type="reset" class="btn btn-primary" value="Reset"></nobr>
      </div>
      </center>
    </form>
</div>
</div>
<br>
<?php include 'includes/footer.php'; ?>
</body>
</html>
