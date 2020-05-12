<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
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
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="includes/header.php">
<link rel="stylesheet" href="includes/footer.php">
</head>
<style>
@media (min-width:320px) and (max-width:599px){
  h2{
    padding-top:3rem;
    margin-bottom:-2.5rem;
    padding-left:2rem;
  }
  .form-control{
    width:137%;
  }
  .loginForm{
    margin-top: 4rem !important;
    margin-bottom: 2rem !important;
    width: 65%;
    margin: auto 1rem;
    padding: 0%;
  }
  .submitRow{
    margin: auto 4rem;
  }

}

@media (min-width:420px) and (max-width:500px){
  .submitRow{
    margin: auto 7rem;
  }
}
@media (min-width:501px) and (max-width:599px){
  .submitRow{
    margin: auto 9rem;
  }
}

@media (min-width:561px) and (max-width:599px){
  .submitRow{
    margin: auto 11rem;
  }
}
@media (min-width:600px) and (max-width:1049px){
  .form-control{
    width:116%;
  }
  .loginForm{
    margin-top: 5rem !important;
    margin-bottom: 2rem !important;
    width: 65%;
    margin: auto 5rem;
    padding: 0%;
  }
  .submitRow{
    margin: auto 9rem;
  }
}
@media (min-width:691px) and (max-width:1049px){
  .submitRow{
    margin: auto 11rem;
  }
}

@media (min-width:801px) and (max-width:1049px){
  .loginForm{
  margin-top: 5rem !important;
  margin-bottom: 2rem !important;
  width: 49%;
  margin: auto 12rem;
  padding: 0%;
  }
  .submitRow{
    margin: auto 9rem;
  }
}
@media (min-width:901px) and (max-width:1049px){
  .submitRow{
    margin: auto 11rem;
  }
}
@media (min-width:1050px)and (max-width:1200px){
  .form-control{
    width:98%;
  }
  .loginForm{
    margin-top: 7rem !important;
    margin-bottom: 2rem !important;
    width: 42%;
    margin: auto 19rem;
    padding: 0%;
  }
}
</style>
<body>
<?php include 'includes/header.php'; ?>
<form method="post" action="login_submit.php" class="loginForm">
      <center><h2 style="color:#989c9e">Login</h2></center><br><br>
      <p>Enter username, password and fingerprint</p>
      <p style="color:red">
        <?php if(isset($_GET['error'])){
          echo $_GET['error'];
        } ?>
      </p>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Username (Email)" pattern="*[A-Za-z_-!#$%^*]+@[A-Za-z]+\.[A-Za-z]{2,3}" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
      </div>


      <center>
      <div class="form-group submitRow">
      <nobr>  <input type="submit" class="btn btn-primary" value="Login" name="submit">&emsp;
        <input type="reset" class="btn btn-primary" value="Cancel"></nobr>
      </div>
      </center>
    </form>
                      <!-- End # Login Form -->
<?php include 'includes/footer.php'; ?>

</body>
</html>
