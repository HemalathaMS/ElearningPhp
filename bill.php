<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>H Square-Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

<?php include 'includes/header.php'; ?>
       <br style="margin-top:10%" class="aboveSpaceCart">
<div class="container">
  <h2>Billing Details</h2>
  <p>We are HAPPY to see you!!</p>
      <?php
            require'includes/common.php';
            $sum=0;
            $id="";
            if (isset($_SESSION['email'])) {
                 $user_id=$_SESSION['user_id'];
                 $join_query="select * from user_items inner join items on user_id='$user_id' and item_id=items.id and status='Order Confirmed'";
                 $result=mysqli_query($con,$join_query) or die(mysqli_error($con));
                 if(mysqli_num_rows($result)==0){
                   echo"Add items to cart first";
                 }
                 else{
                   ?><table class="table table-striped">
                     <thead>
                       <tr>
                         <th>Sl.No</th>
                         <th>Course Name</th>
                         <th>Price</th>

                       </tr>
                     </thead>
                     <tbody>

                  <?php while($row=mysqli_fetch_array($result)){
                      $sum+=$row['price'];
                      $id=$id.",".$row['id'];?>
                      <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        
                      </tr>
                  <?php }

                 }
          }

          ?>
      <tr>
      <td colspan="2">Total:</td>
      <td>Rs <?php echo $sum ?>/-</td>
      </tr>

    </tbody>
  </table>
  <center> <button onclick="show()" class="btn" style="color:#fff;background-color:#00a1f2;font-size:2rem">Pay</button>
    <p id="txt" style="display:none;margin-top:1rem;color:gray;">Contact 9964580124 for further procedure <a href="billed.php">Continue</a></p>
  </center>

</div>
<br style="margin-top:10%">
<div class="foot">
<?php include 'includes/footer.php'; ?>
</div>

<script type="text/javascript">
function show(){
  document.getElementById('txt').style.display="block";
}
</script>
</body>
</html>
