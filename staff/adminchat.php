<?php
session_start();
include('include/db.php');

if(isset($_POST["inq-search"])){
	$usr=$_GET["cname"];
	$msg1 = $_POST["inq"];
	$msg = "INSERT into `inquiry` (`Customer`,`A_msg`) VALUES ('$usr','$msg1')";
	$run_query1 = mysqli_query($con,$msg);
		header('Location: admin_inquiry.php?inq-msg='.$usr);
		
		}
		
		elseif(isset($_GET["del"])){
			                    $del_id = $_GET["del"];
	                            
	                            $msg = "DELETE from repair WHERE id = $del_id";
	                            $run_query1 = mysqli_query($con,$msg);
								header('Location: admin_repair.php');
		}	
			
			
	
		                   elseif(isset($_POST["submit"])){
			                    $customer = $_POST["customer_name"];
	                            $device_name = $_POST["device_name"];
                                $details = $_POST["info"];
								$cid = $_POST["courier_info"];
								$rid = $_POST["msg_id"];
								
								
	                            $msg = "UPDATE repair SET Customer='$customer', Device='$device_name', courier_id='$cid', Status='$details' WHERE id = '$rid'";
	                            $run_query1 = mysqli_query($con,$msg);
								
								//echo "<script>alert('Your Password succesfully changed');</script>";
								header('Location: admin_repair.php');
		                }


  	
			
			
			
			
			
			
		?>