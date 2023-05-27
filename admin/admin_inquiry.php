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
<script src="style/js/bootstrap.min.js"></script>
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
                        <h3 class="text-muted text-center mb-3">Inquiries</h3>
						
                        <table class="table table-striped bg-light text-center">
						<?php echo $msg; ?>
						
                            <thead>
                                <tr class="text-muted">
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Time</th>
									<th>Go to Chat</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								$sql = "SELECT * FROM inquiry group by Customer order by Time desc";
								$result = $con->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>".$row["Customer"]."</td><td>".$row["C_msg"]."</td>
										<td>".$row["Time"]."</td>										
										<td><a href='admin_inquiry.php?inq-msg=".$row["Customer"]."'>
										<button type='button' class='btn btn-info' style=' margin-top:0px;width:80px; height:30px'><i class='fas fa-plus'></i></button></a>&nbsp;&nbsp;</td>
										
										
										</tr>";
										}
									}
									
							if(isset($_GET["inq-msg"])){
								
								$usr=$_GET["inq-msg"];
								
								?> 
								<form action="adminchat.php?cname=<?php echo $usr; ?>" method="POST" class="form-horizontal">
									<label for="email">Enter Your Message :</label>
									
									<input class="input" id="inq" name ="inq" type="text" placeholder="Enter the message">
									<!--<button type="submit" id="search_btn" class="search-btn">Search</button> -->
									<button type = "submit" name="inq-search" class="search-btn">Send Now</button>
								</form>
								<?php
								
								$product_query = "SELECT * FROM inquiry where Customer = '$usr'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
		echo "<table class='table table-striped bg-light'>";
		while($row = mysqli_fetch_array($run_query)){
			$msg_id    = $row['id'];
			$cus  = $row['Customer'];
			$c_msg = $row['C_msg'];
			$a_msg = $row['A_msg'];
			$pro_time  = $row['Time'];
        
           // $cat_name = $row["cat_title"];<tr></tr><tr></tr><tr>$a_msg</tr><tr>$pro_time</tr>
							
							
			
			
			echo "
				
						
						<tr>
						    
							<td><small>$cus</small>
							</br>
							<b>$c_msg</b>
							</br>
							<small>$pro_time</small>
							</td>
							
							<td></td>
							
						</tr><tr>
						    <td></td>
							<td>Admin
							</br>
							<b>$a_msg</b>
							</br>
							<small>$pro_time</small>
							</td>
							
						</tr>	
						
                        
			";
		}
		echo "</table>";
		
		}
								
							}								
									
									
								?>
                            </tbody>
                        </table>
                    

						</div>
            </div>
        </div>
    </div>
</section>
</body>
</html>