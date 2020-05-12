<?php session_start();
      require 'includes/common.php';



    $select_query1="SELECT * from items where id=".$_GET['id'];
    $result1=mysqli_query($con,$select_query1) or die(mysqli_error($con));



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Access Page</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- For Glyphicons -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
<style>
.sidenav {
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: #0b2a3b;
overflow-x: hidden;
transition: 0.5s;
padding-top: 60px;
position: absolute;
top: 4rem;
}

.sidenav a {
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
transition: 0.3s;

}

.sidenav a:hover {
color: #f1f1f1;
}

.sidenav .closebtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}
.bigScreen{
  display:block;
}
.smallScreen{
  display:none;
}
video{
  width:55rem;
  height:31rem;
}
@media (min-width:320px) and (max-width:800px){
  .bigScreen{
    display:none;
  }
  .smallScreen{
    display:block;
  }
  .leftContent li{
    font-size:1.2rem;
    color:#fff;
  }
  .rightContent{
    padding:3%;
    margin-left: -7%;
    width:87%;
  }

}
@media (min-width:530px){
  video {

    width: 28rem;
    height: 16rem;

}
}

@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>
<br><br><br><br style="margin-top:1%">


  <div class="container-fluid">
    <div class="leftContent">
      <div class="bigScreen">
      <ul class="contents">
        <li class="introduction" id="introduction">Introduction</li>
        <li class="description" id="description">Course Details</li>
        <li class="ch1" id="ch1">Chapter 1</li>
        <li class="ch2" id="ch2">Chapter2</li>
      </ul>
    </div>

    <div class="smallScreen">
    <div id="mySidenav" class="sidenav">
      <li href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="padding-left:17rem;">&times;</li>
      <li href="#" class="introduction" id="introduction" onclick="closeNav()">Introduction</li>
      <li href="#" class="description" id="description" onclick="closeNav()">Chapter Description</li>
      <li href="#" class="ch1" id="ch1" onclick="closeNav()">Chapter 1</li>
      <li href="#" class="ch2" id="ch2" onclick="closeNav()">Chapter 2</li>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>
</div>

<?php while ($row=mysqli_fetch_assoc($result1)) { ?>
    <div class="rightContent">
      <div class="intro" id="intro">
        <h1>Introduction</h1>
        <p><?php echo $row['introduction'] ?></p>
      </div>
      <div class="desc" id="desc">
        <h1>Description</h1>
        <p><?php echo $row['description'] ?></p>
      </div>
      <div class="chapter1" id="chapter1">
        <video src="<?php echo $row['chapter1a'] ?>" controls>
        </video>
        <p><?php echo $row['chapter1b'] ?></p>
      </div>
      <div class="chapter2" id="chapter2">
        <video src="<?php echo $row['chapter2a'] ?>" controls>
        </video>
        <p><?php echo $row['chapter2b'] ?></p>
      </div>
    </div>
    <?php } ?>
  </div>


<br style="margin-top:50%">


<script type="text/javascript">
    $(document).ready(function(){

      $(".intro").show();
      $(".desc").hide();
      $(".chapter1").hide();
      $(".chapter2").hide();

    });

    $(".introduction").click(function(){

            $(".intro").show();
            $(".desc").hide();
            $(".chapter1").hide();
            $(".chapter2").hide();

    });

    $(".description").click(function(){

            $(".intro").hide();
            $(".desc").show();
            $(".chapter1").hide();
            $(".chapter2").hide();
   });

    $(".ch1").click(function(){

            $(".intro").hide();
            $(".desc").hide();
            $(".chapter1").show();
            $(".chapter2").hide();
    });

    $(".ch2").click(function(){

            $(".intro").hide();
            $(".desc").hide();
            $(".chapter1").hide();
            $(".chapter2").show();
    });


    function openNav() {
      document.getElementById("mySidenav").style.width = "12rem";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
