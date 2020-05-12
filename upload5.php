<?php
require 'includes/common.php';
if(isset($_GET['a'])) {
	        $aa=$_GET['a'];
			echo $aa;

			
			
        $select_query="update attable set fingerprint='".$aa."'";

        $result=mysqli_query($con,$select_query) or die(mysqli_error($con));


        

    		}
			else {
							
				
						$errMSG = "Sorry, your file is too large.";
				}
			
	
?>