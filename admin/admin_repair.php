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

<?php 
$ss = $_SESSION['Loged_ad'];
//echo $ss; 

?>

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
            <div class="col-lg-10 col-md-9 ml-auto content">
            <!-- <div class="col-md-9 content" > -->
  	            <div class="panel panel-default">
	                <div class="panel-heading" style="background-color:#c4e17f">
	                <h1><span><i class="fa fa-tag" style="margin-left:10px;"></i></span> Repair Status  </h1>
                    </div><br>
                    <?php echo $msg; ?>
	                <div class="panel-body" style="background-color:#E6EEEE;">
                    <div class="row align-items-center">
		                <div class="col-7">
                            <div class="card bg-light card-body" style="margin-top:20px;">
                            <form action="" method="post" name="form" enctype="multipart/form-data">
                                <p>Customer Name</p>
                                <input class="input-lg thumbnail form-control" type="text" name="customer_name" id="product_name" autofocus style="width:100%" placeholder="Customer Name" required>
                                <p>Device Name</p>
                                <input class="input-lg thumbnail form-control" type="text" name="device_name" id="device_name" autofocus style="width:100%" placeholder="Device Name" required>
                                <p>Courier Info</p>
                                <input class="input-lg thumbnail form-control" type="text" name="courier_info" id="courier_info" autofocus style="width:100%" placeholder="Courier ID/info" required>
                                <p>Description</p>
                                <textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="Write Repairing Status Here.." required></textarea>
                                <p>Staff Member</p>
                                <input class="input-lg thumbnail form-control" type="text" name="staff_name" id="Staff_name" autofocus style="width:100%" placeholder="Staff Member" required>
				
							</div>
                        
                        </div>
                        <div style="margin-top:20px; align-item:center;">
                            <button type="submit" name="cancel" id="cancel" class="btn btn-primary" style="width:100px; height:60px"> Cancel</button>
                            <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add New</button>
                        </div>

                        <?php
		                    if(isset($_POST["submit"])){
			                    $customer = $_POST["customer_name"];
	                            $device_name = $_POST["device_name"];
                                $details = $_POST["details"];
								$cid = $_POST["courier_info"];
								$ss = $_POST["staff_name"];
	                            $msg1 = "INSERT into `repair` (`Customer`,`Device`,`Status`,`courier_id`,`staff_name`) VALUES ('$customer','$device_name','$details','$cid','$ss')";
	                            $run_query1 = mysqli_query($con,$msg1);
		                }


	                        ?>
        
		
 	                       



                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-10 ml-auto">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="text-muted text-center mb-3">Manage Reparings</h3>
                        <table class="table table-striped bg-light text-center">
						<?php echo $msg; ?>
						

                            <thead>
                                <tr class="text-muted">
                                    <th>Product Id</th>
                                    <th>Customer</th>
									<th>Courier Info</th>
                                    <th>Device</th>
                                    <th>Issue</th>
									<th>Staff Member</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								$sql = " SELECT * FROM repair";
								$result = $con->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>".$row["id"]."</td><td>".$row["Customer"]."</td><td>".$row["courier_id"]."</td><td> ".$row["Device"]."</td><td>".$row["Status"]."</td><td>".$row["staff_name"]."</td>
										
										<td><a href='admin_edit_repair.php?edit_id=".$row["id"]."'><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
<a href='adminchat.php?del=".$row["id"]."' onclick=\" return confirm('Do you want to delete');\"><i class='fa fa-window-close'></i></a></td>
										
										
										</tr>";
										}
									}
								?>
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>






</body>
</html>