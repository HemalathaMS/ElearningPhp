<?php session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require 'includes/common.php';
    if($_GET['id']){
      $select_query2="SELECT * from items where id=".$_GET['id'];
      $result2=mysqli_query($con,$select_query2) or die(mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>H Square-Courses</title>
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
  @media (min-width:1600px){
    .card-body{
        padding: 1rem 20rem;
    }
  }
  @media (min-width:320px){
    .card-body{
      padding: :-1rem 20rem;
    }
  }
  </style>
</head>
<body style="background-color:#c5cbce">

  <?php include 'includes/header.php';
        require 'includes/common.php';
   ?>
   <?php

   if($_GET['id']){
    if($row=mysqli_fetch_assoc($result2)){ ?>
      <div class="container" style="margin-top:6rem">
     <div class="card" style="padding: 1rem 1rem 0rem 1rem;margin-bottom:1rem">
       <p>Start creating a course by filling all the required details mentioned below.</p>
     </div>
   <form action="courseUpdate.php" method="post" enctype="multipart/form-data">
     <div class="card" style="margin-bottom:1rem">
       <div class="card-header" style="background-color:#00a1f2;color:white">
         Course Details
       </div>
       <div class="card-body">
        <div class="form-group">
          <label for="courseNameU">Course Name : </label>
          <input type="text" class="form-control" id="courseNameU" name="courseNameU" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
          <label for="coursePriceU">Price : </label>
          <input type="number" class="form-control" id="coursePriceU" name="coursePriceU" value="<?php echo $row['price']; ?>">
        </div>
        <div class="form-group">
          <label for="imageUploadU">Upload Course Image : </label>
          <input type="file" name="imageUploadU" id="imageUploadU" >
        </div>
       </div>
     </div>

     <div class="card" style="margin-bottom:2rem">
       <div class="card-header" style="background-color:#00a1f2;color:white">
         Lecture Details
       </div>
       <div class="card-body">
        <div class="form-group">
          <label for="courseIntroduction">Course Introduction : </label>
          <textarea  rows="8" cols="80" class="form-control" id="courseIntroductionU" name="courseIntroductionU" ><?php echo $row['introduction']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="courseDescription">Course Description : </label>
          <textarea  rows="8" cols="80" class="form-control" id="courseDescriptionU" name="courseDescriptionU" ><?php echo $row['description']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="chapter1Description">Chapter 1 (Description): </label>
          <textarea  rows="8" cols="80" class="form-control" id="chapter1DescriptionU" name="chapter1DescriptionU" ><?php echo $row['chapter1b']; ?></textarea>
        </div>

        <div class="form-group">
          <label for="video1U">Upload Video 1: </label>
          <input type="file" name="video1U" id="video1U" />
        </div>
        <div class="form-group">
          <label for="chapter2Description">Chapter 2 (Description): </label>
          <textarea  rows="8" cols="80" class="form-control" id="chapter2DescriptionU" name="chapter2DescriptionU" ><?php echo $row['chapter2b']; ?></textarea>
        </div>

        <div class="form-group">
          <label for="video2U">Upload Video 2: </label>
          <input type="file" name="video2U" id="video2U" />
        </div>

        <input type="hidden" name="courseId" id="courseId" value="<?php echo $_GET['id']; ?>">
       </div>
     </div>

     <div class="card" style="border:2px solid #00a1f2;margin-bottom:2rem;padding:1rem">
       <input type="submit" class="btn" name="submit" value="Update" style="background-color:#00a1f2;color:#fff;width:6rem;margin:auto">
     </div>
     </form>
   </div>
   <?php } } else { ?>
   <div class="container" style="margin-top:6rem">
     <div class="card" style="padding: 1rem 1rem 0rem 1rem;margin-bottom:1rem">
       <p>Start creating a course by filling all the required details mentioned below.</p>
     </div>
   <form action="courseUpload.php" method="post" enctype="multipart/form-data">
     <div class="card" style="margin-bottom:1rem">
       <div class="card-header" style="background-color:#00a1f2;color:white">
         Course Details
       </div>
       <div class="card-body">
        <div class="form-group">
          <label for="courseName">Course Name : </label>
          <input type="text" class="form-control" id="courseName" name="courseName">
        </div>
        <div class="form-group">
          <label for="coursePrice">Price : </label>
          <input type="number" class="form-control" id="coursePrice" name="coursePrice" >
        </div>
        <div class="form-group">
          <label for="imageUpload">Upload Course Image : </label>
          <input type="file" name="imageUpload" id="imageUpload" >
        </div>
       </div>
     </div>

     <div class="card" style="margin-bottom:2rem">
       <div class="card-header" style="background-color:#00a1f2;color:white">
         Lecture Details
       </div>
       <div class="card-body">
        <div class="form-group">
          <label for="courseIntroduction">Course Introduction : </label>
          <textarea  rows="8" cols="80" class="form-control" id="courseIntroduction" name="courseIntroduction"></textarea>
        </div>
        <div class="form-group">
          <label for="courseDescription">Course Description : </label>
          <textarea  rows="8" cols="80" class="form-control" id="courseDescription" name="courseDescription"></textarea>
        </div>
        <div class="form-group">
          <label for="chapter1Description">Chapter 1 (Description): </label>
          <textarea  rows="8" cols="80" class="form-control" id="chapter1Description" name="chapter1Description"></textarea>
        </div>

        <div class="form-group">
          <label for="video1">Upload Video 1: </label>
          <input type="file" name="video1" id="video1" />
        </div>
        <div class="form-group">
          <label for="chapter2Description">Chapter 2 (Description): </label>
          <textarea  rows="8" cols="80" class="form-control" id="chapter2Description" name="chapter2Description"></textarea>
        </div>

        <div class="form-group">
          <label for="video2">Upload Video 2: </label>
          <input type="file" name="video2" id="video2" />
        </div>
       </div>
     </div>

     <div class="card" style="border:2px solid #00a1f2;margin-bottom:2rem;padding:1rem">
       <input type="submit" class="btn" name="submit" value="Submit" style="background-color:#00a1f2;color:#fff;width:6rem;margin:auto">
     </div>
     </form>
   </div>

    <?php } ?>

<?php include 'includes/footer.php'; ?>
</body>
</html>
