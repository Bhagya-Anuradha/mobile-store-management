<?php
include "header.php";
?>

		<!-- SECTION -->
		<div class="section main main-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					
					<?php 
								include 'db.php';
								$product_id = $_GET['p'];
								
								$sql = "SELECT products.product_image, products.pricing,products.product_desc,categories.cat_id, products.product_id,categories.cat_title,brands.brand_title,products.product_title,products.product_price FROM products LEFT JOIN brands ON products.product_brand = brands.brand_id left join categories on products.product_cat=categories.cat_id  WHERE product_id = $product_id";
								
								//$sql = " SELECT * FROM products WHERE product_id = $product_id";
								if (!$con) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($con, $sql);
								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
									echo '
									
                                    
                                
                                <div class="col-md-5 ">
                                <div id="product-main-img">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                  
                                </div>
                            </div>
                                
                              
                                 
									';
                                    
									?>
									<!-- FlexSlider -->
									
									<?php 
									echo '
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">'.$row['product_title'].'</h2>
							
							<div>
								<h3 class="product-price">Rs. '.$row['product_price'].'</h3>
								<span class="product-available">'.$row['pricing'].'</span>
							</div>
							<p>'.$row['product_desc'].'</p>


							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" required class="form-control qty" min="0" value="1" step="0.01">
										
									</div>
								</div>
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button class="add-to-cart-btn" pid="'.$row['product_id'].'"  id="product" ><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
								
								
							</div>

							

							<ul class="product-links">
								<h4><li>Category and Brand</li>
									<li><a href=store.php?cat_id='.$row['cat_id'].'><h5>'.$row['cat_title'].'</h5></a></li> >>
								<li>'.$row['brand_title'].'</li>
							</h4></ul>


						</div>
					</div>
									
					
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					
					
					
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					
					<!-- /Product details -->

					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section main main-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
							
						</div>
					</div>
                    ';
									$_SESSION['product_id'] = $row['product_id'];
									}
								} 
								?>	
								<?php
                    include 'db.php';
								$product_id = $_GET['p'];
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				<div class='col-md-3 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										
									</div></a>
									<div class='product-body'>
										<h4 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h4>
										<h6 ><strong>$pro_brand</strong></h6>
										<h4 class='product-price header-cart-item-info'>$pro_price</h4>
										<button pid='$pro_id' id='product' class='btn btn-primary' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									
									
									</div>
									
								</div>
							</div>
                        
			";
		}
        ;
      
}
?>
					<!-- product -->
					
					<!-- /product -->

				</div>
				<!-- /row -->
                
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
<?php
include "footer.php";

?>
