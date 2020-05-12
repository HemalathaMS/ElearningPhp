
<!--<div class="headerh">
  <a href="index.php" class="logo">HSquare</a>
  <div class="headerh-right">

    <?php
      //if(isset($_SESSION['email'])){ ?>
        <a class="active" href="courseDisplay.php" >All Courses</a>
        <a href="cart.php">Cart</a>
        <a href="index.php#contactUs">Contact</a>
        <a href="index.php#aboutUs">About</a>
        <a href="logout.php" >LogOut</a>
        <a>Hi, <?php //echo $_SESSION['uname']; ?></a>
      <?php //}else{ ?>
    <a class="active" href="login.php" >Login</a>
    <a href="register.php">SignUp</a>
    <a href="index.php#contactUs">Contact</a>
    <a href="index.php#aboutUs">About</a>
  <?php //} ?>
  </div>
</div>-->

<?php
 require 'common.php';

 $select_query="Select * from users where email='".$_SESSION['email']."'";

        $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
        $row=mysqli_fetch_array($result);

      ?>
<div class="headerh">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="index.php" class="logo">HSquare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
    if(isset($_SESSION['email'])){
    	if($row['isTeacher']==1){ ?>
    		<li class="nav-right">
	          <a class="" href="teacherdashboard.php" >Teacher-Dashboard</a>
	      </li>		
    	<?php }
      ?>
      <li class="nav-right">
          <a class="" href="courseDisplay.php" >All Courses</a>
      </li>
      <li class="nav-right">
        <a href="cart.php">Cart</a>
      </li>
      <li class="nav-right">
        <a href="index.php#contactUs">Contact</a>
      </li>
      <li class="nav-right">
        <a href="index.php#aboutUs">About</a>
      </li>
      <li class="nav-right">
        <a href="logout.php" >LogOut</a>
      </li>
      <li class="nav-right">
        <a>Hi, <?php echo $_SESSION['uname']; ?></a>
      </li>
    <?php } else  { ?>
      <li class="nav-right">
        <a class="active" href="login.php" >Login</a>
      </li>
      <li class="nav-right">
        <a href="register.php">SignUp</a>
      </li>
      <li class="nav-right">
        <a href="index.php#contactUs">Contact</a>
      </li>
      <li class="nav-right">
        <a href="index.php#aboutUs">About</a>
      </li>
    <?php } ?>
    </ul>


</div>
</nav>
</div>
