<?php
include 'header.php';
$cat_id = $_GET['cat_id'];
?>

</script>
      <div class="main main-raised"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
						<!-- /aside Widget -->


						<!-- aside Widget -->
							<?php $category_query = "SELECT * FROM categories";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		
            
            <div class='aside'>
							<h3 class='aside-title'>Categories</h3>
							<div class='btn-group-vertical'>
	";
	if(mysqli_num_rows($run_query) > 0){
        $i=1;
		while($row = mysqli_fetch_array($run_query)){
            
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=$i";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;
            
            
if($cid==1){
				
				echo "
					
                    <div type='button' class='btn navbar-btn category' cid='$cid'>
									
									<a href='brands.php?cat_id=$cid'>
										<span  ></span>
										$cat_name
										<small class='qty'>($count)</small>
									</a>
								</div>
                    
			";
			}
			
			else{
				echo "
					
                    <div type='button' class='btn navbar-btn category' cid='$cid'>
									
									<a href='store.php?cat_id=$cid'>
										<span  ></span>
										$cat_name
										<small class='qty'>($count)</small>
									</a>
								</div>
                    
			";
			}
            
		}
        
        
		echo "</div>";
	}
	?></div>
						<!-- /aside Widget -->

						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						

						<!-- store products -->
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
							<!-- product -->
							<?php
							
								$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	//$product_query = "SELECT * FROM products left join brands on products.product_brand = brands.brand_id WHERE product_cat > 2 ";
	
		$product_query = "SELECT * FROM brands ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cat_id    = $row['brand_id'];
			//$pro_cat   = $row['product_cat'];
			//$pro_brand = $row['brand_title'];
			$cat_title = $row['brand_title'];
			//$cat_des = "RS: ".$row['brand_title'];
			$cat_image = $row['img'];
            
			
							echo "
				
                        
                        <div class='col-md-4 col-xs-6' >
								<a href='store.php?cat_id=$cat_id'><div class='product'>
									<div class='product-img'>
										<img src='img/$cat_image' style='max-height: 170px;' alt=''>
										
									</div></a>
									<div class='product-body'>
										<h4 class='product-name header-cart-item-name'><a href='store.php?cat_id=$cat_id'>$cat_title</a></h4>
										<h6 ><strong>$cat_title</strong></h6>
										<h4 class='product-price header-cart-item-info'></h4>
										<a href='store.php?cat_id=$cat_id'> <p class='btn btn-success' role='button'>Shop</p></a>
									
									</div>
									
								</div>
							</div>
                        
	";}} ?>
							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter 
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						 /store bottom filter -->
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