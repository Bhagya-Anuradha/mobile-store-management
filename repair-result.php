<?php
include 'header.php';
?>

</script>
      <div class="main main-raised"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
			
			<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Repair Info</h3>
							
						</div>
					</div>
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
					
						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						

						<!-- store products -->
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
							<!-- product -->
							
					<div>
					
							
							
							
							
							
							<?php
							
								$limit = 9;

if (!isset($_SESSION["uid"])) {
					
				
					 echo '
';?>
									<label for="r_number">Enter Your Repair Number :</label>
									<input class="input" id="repair_number" name ="repair_number" type="text" placeholder="Enter the Repair Number">
									<!--<button type="submit" id="search_btn" class="search-btn">Search</button> -->
									<button name="repair-search" class="search-btn" data-toggle="modal" data-target="#Modal_register">search</button>
	


					
                           
                           <?php
               }
				else{
					?><form action="repair-result.php" method="POST" class="form-horizontal">
									<label for="r_number">Enter Your Repair Number :</label>
									<input class="input" id="repair_number" name ="repair_number" type="text" placeholder="Enter the Repair Number">
									<!--<button type="submit" id="search_btn" class="search-btn">Search</button> -->
									<button type = "submit" name="repair-search" class="search-btn" >search</button>
								</form>
					<?php
					
if(isset($_POST["repair-search"])){
	$limit = 9;
	
		//$pageno = $_POST["pageNumber"];
		//$start = ($pageno * $limit) - $limit;
	
	
	
	$term = $_POST["repair_number"];
	

	
	$product_query = "SELECT * FROM repair WHERE id=$term";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			$pro_cat   = $row['Customer'];
			$pro_brand = $row['Device'];
			$pro_title = $row['Status'];
			$pro_staff = $row['staff_name'];
        
           // $cat_name = $row["cat_title"];
			echo "<table class='table table-striped bg-light text-center'>
				<thead >
                                <tr  class='text-muted'>
                              
						<th style = 'text-align: center;'>Repair ID</th>
						<th style = 'text-align: center;'>Customer</th>
						<th style = 'text-align: center;'>Device</th>
						<th style = 'text-align: center;'>Repair info</th>
						<th style = 'text-align: center;'>Staff member</th>
                                </tr>
                            </thead>
                            
                        
                        
						<tr>
						    <td>$pro_id</td>
							<td>$pro_cat</td>
							<td>$pro_brand</td>
							<td>$pro_title</td>
							<td>$pro_staff</td>
							</tr></table>
						
                        
			";
		}
	}
				}

else if(isset($_POST["inq-search"])){
	
	
}
	else{
		//$start = 0;
	}}
 ?>
							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
</div>
<?php
include "footer.php";
?>