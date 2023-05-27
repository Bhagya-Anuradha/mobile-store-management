<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:../index.php');
}
$msg='';
?>	

<!DOCTYPE html>
<html lang="en">
<head>
<meta name = "viewport" content="width = device-width, initial-scale = 1">
<title>Mobile</title>
<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style/css/style2.css">
<script src="style/js/all.min.js"></script>
<!-- <script src="style/js/bootstrap.min.js"></script> -->
</head>
<body>
<?php include("include/side_bar.php");?>
<?php include("include/header.php");?>

<!--cards-->
<!--end of cards-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-9 ml-auto">
                <div class="row pt-md-5 mt-md-3 mb-5">

                </div>
            </div>
        </div>
    </div>
</section>
<!--end of card-->

<!--tables-->



<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-10 ml-auto">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="text-muted text-center mb-3">Manage Products</h3>
                        
						<?php echo $msg; ?>
                            


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<section>
<div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-10 col-md-9 ml-auto content">
            <!-- <div class="col-md-9 content" > -->
  	            <div class="panel panel-default">
	                <div class="panel-heading" style="background-color:#c4e17f">
	                <h1><span><i class="fa fa-tag" style="margin-left:10px;"></i></span> Repair Status  </h1>
                    </div><br>
                    <?php echo $msg; 
					
					
					 $edit_id = $_GET["edit_id"];
					 $product_query = "SELECT * FROM repair where id = '$edit_id'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$msg_id    = $row['id'];
			$cus  = $row['Customer'];
			$device = $row['Device'];
			$info = $row['Status'];
			$cid = $row['courier_id'];
	}}
					
					?><?php echo $cus; ?>
	                <div class="panel-body" style="background-color:#E6EEEE;">
                    <div class="row align-items-center">
		                <div class="col-7">
                            <div class="card bg-light card-body" style="margin-top:20px;">
                            <form action="adminchat.php" method="post" name="form" enctype="multipart/form-data">
                                <p>Customer Name</p>
                                <input class="input-lg thumbnail form-control" type="text" value="<?php echo $cus;?>" name="customer_name" id="product_name" autofocus style="width:100%" placeholder="Customer Name" required>
                                <p>Device Name</p>
                                <input class="input-lg thumbnail form-control" type="text" value="<?php echo $device;?>" name="device_name" id="device_name" autofocus style="width:100%" placeholder="Device Name" required>
                                <p>Courier Info</p>
                                <input class="input-lg thumbnail form-control" type="text" value="<?php echo $cid;?>" name="courier_info" id="courier_info" autofocus style="width:100%" placeholder="Courier ID/info" required>
                                <p>Repair info</p>
								<input class="input-lg thumbnail form-control" type="text" value="<?php echo $info;?>" name="info" id="info" autofocus style="width:100%" placeholder="Device Name" required>
                                <input class="input-lg thumbnail form-control" type="hidden" value="<?php echo $msg_id;?>" name="msg_id" id="msg_id" autofocus style="width:100%" placeholder="Device Name" required>
                                
                               
                            </div>
                        
                        </div>
                        <div style="margin-top:20px; align-item:center;">
						
                            <a href='admin_repair.php'><button type="button" name="cancel" id="cancel" class="btn btn-primary" style="width:100px; height:40px"> Cancel</button></a>
                            <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:100px; height:40px"> Update</button>
                        </div>
						</div>
                        </form>
                        </div>
                                           



                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>