
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Featured Products</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM categories LIMIT 3";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $cat_id    = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        $cat_discription = $row['cat_discription'];
                        $cat_image = $row['cat_imag'];
							
							
							if($cat_id ==1){
								echo "
						
									<div class='col-sm-6 col-md-4 text-center'>
										<div class='thumbnail product-box'>
										<a href='brands.php?cat_id=$cat_id'>
												<h3>$cat_title</h3>
												<img src='img/$cat_image'>
												<p><font color='blue'>$cat_discription<font></p>
										<p class='btn btn-success' role='button'>Shop</p>
										</a></div>
									</div>
                               ";
								
							}
							
							else {
								echo "
						
									<div class='col-sm-6 col-md-4 text-center'>
										<div class='thumbnail product-box'>
										<a href='store.php?cat_id=$cat_id'>
												<h3>$cat_title</h3>
												<img src='img/$cat_image'>
												<p><font color='blue'>$cat_discription<font></p>
										<p class='btn btn-success' role='button'>Shop</p>
										</a></div>
									</div>
                               ";
								
							}
                        
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner3.png" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner2.png" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/banner4.png" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     

		

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Arrivals</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id order by product_id DESC limit 6 ";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = "Rs: ".$row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
						<div class='col-md-4 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style=' max-height: 150px; width:auto; margin-left: auto; margin-right: auto;' alt=''>
										
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
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
</div>
		