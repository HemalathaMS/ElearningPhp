<?php



    /*This function will take user id and items id and will check whether there is an entry in users_products table with status ’Added to cart’.*/

    function check_if_added_to_cart($item_id){
      require'includes/common.php';
      $user_id=$_SESSION['user_id'];

      $check_query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";

      $result=mysqli_query($con,$check_query) or die(mysqli_error($con));
      if(mysqli_num_rows($result)>=1){
        return 1;
      }
      else{
        return 0;
      }
    }



        function check_if_order_confirmed($item_id){
          require'includes/common.php';
          $user_id=$_SESSION['user_id'];

          $check_query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Billed'";

          $result=mysqli_query($con,$check_query) or die(mysqli_error($con));
          if(mysqli_num_rows($result)>=1){
            return 1;
          }
          else{
            return 0;
          }
        }

 ?>
