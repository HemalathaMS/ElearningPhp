<?php session_start();
error_reporting(E_ERROR | E_PARSE);
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

  <link rel="stylesheet" href="css/courseDisplay.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <style>
  @media (min-width:1200px){
    .column{
      width:33% !important;
      padding:2% !important;
    }
    .startLearning, .addedToCart{
      margin-top: 0rem !important;
      margin-left: 5rem !important;
    }
    .addToCart{
      margin-top: 0rem !important;
      margin-left: 6rem !important;
    }
    .enroll{
    
		margin-top:0rem !important;
		margin-left:7rem !important;
    }
  }
@media (min-width:320px) and (max-width:364px){
  .column{
    width:93%;
    padding:5%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 2rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 3rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 4rem !important;
 }

}
@media (min-width:364px) and (max-width:400px){
  .column{
    width:93%;
    padding:5%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 3rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 4rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 6rem !important;
 }

}
@media (min-width:400px) and (max-width:460px){
  .column{
    width:93%;
    padding:5%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 5rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 6rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 7rem !important;
 }

}
@media (min-width:460px) and (max-width:650px){
  .column{
    width:93%;
    padding:2%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 8rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 9rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 10rem !important;
 }

}
@media (min-width:650px) and (max-width:900px){
  .column{
    width:50%;
    padding:2%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 0rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 1rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 2rem !important;
 }

}
@media (min-width:900px) and (max-width:1200px){
  .column{
    width:33%;
    padding:1%;
  }
  .addedToCart, .startLearning{
    margin-top: 0rem !important;
    margin-left: 0rem !important;
  }

  .addToCart{
    margin-top: 0rem !important;
    margin-left: 1rem !important;
  }

  .enroll{
    margin-top: 0rem !important;
    margin-left: 1rem !important;
 }

}
</style>

</head>
<body>

<?php include 'includes/header.php';
      include 'check-if-added.php';
      require 'includes/common.php';
 ?>

<br><br><br><br>
<div class="course container">
<div class="row">
  <?php



    $select_query="SELECT * from items;";
    $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    while ($rowC=mysqli_fetch_array($result)) {

  ?>

<div class="column responsiveCard">
  <div class="w3-card-4 sizing">
    <header class="w3-container courseheader" >
      <h4><?php echo $rowC['name']; ?>
        
        <?php  if ($_SESSION['user_id'] == $rowC['teacher_id']) {
                      
                    echo '<a href="teacherdashboard.php?id='.$rowC['id'].'"><input type="button" class="btn startLearning" style="background-color:#f5f5f5;float:right;margin-bottom: 0.5rem" value="Edit"></a>';
                    
         } ?>
      </h4>
      
    </header>

    <div class="w3-container">

      <img src="<?php echo ( $rowC['img'] ); ?>">

    </div>

    <footer class="w3-container coursefooter" >
      <div class="row">
        <div class="col-6">
          <p>Price : <?php echo $rowC['price']; ?></p>
        </div>
          <div class="col-6">

              <?php if (!isset($_SESSION['email'])) { ?>
                      <a href="login.php"><input type="button" class="btn enroll" style="background-color:#f5f5f5;margin-top:0.5rem;margin-left:10rem;" value="Enroll"></a>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart($rowC['id'])) { //This is same as if(check_if_added_to_cart != 0)
                       echo '<a href="courseDisplay.php"><input type="button" class="btn addedToCart" disabled  style="background-color:#f5f5f5;" value="Added to Cart"></a>';

                     }
                     else if (check_if_order_confirmed($rowC['id'])) { //This is same as if(check_if_added_to_cart != 0)
                       echo '<a href="courseAccess.php?id='.$rowC['id'].'"><input type="button" class="btn startLearning" style="background-color:#f5f5f5;" value="Start Learning"></a>';

                     } else {?>

                       <a href="cart-add.php?id=<?php echo $rowC['id'] ?>" name="add" value="add"><input type="button" class="btn addToCart" style="background-color:#f5f5f5;" value="Add to cart"></a>
                     <?php
                   }
                 }
      ?>
    </div>
    </div>
    </footer>

  </div>
</div>

<?php } ?>
</div>
</div>
<div class="foot">
 <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>
