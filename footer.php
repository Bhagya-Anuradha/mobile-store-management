<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h2 class="footer-title">About Us</h2>
								<p>Web based system for DJ Cellular</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i> Talawa Rd, Galenbindunuwewa, 50060, Srilanka.</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> 0775900017</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>djcellular@gmail.com</a></li>
								</ul>
							</div>
						</div>
						

						<div class="col-md-5 text-center">
							<div class="footer">
								<h2 class="footer-title">Categories</h2>
								<ul class="footer-links">
									<li><a href="store.php?cat_id=1">Mobile Phones</a></li>
									<li><a href="store.php?cat_id=2">Tablets and Desktop Computers</a></li>
									<li><a href="store.php?cat_id=3">Mobile Accessories</a></li>
									<li><a href="store.php?cat_id=4"></a></li>
									<li><a href="store.php?cat_id=5"></a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h2 class="footer-title">Location</h2>
								
								<img class="rounded float-right" src="img/map.png" alt="map" style="max-width:100%;">
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
					<div class="row">
					
					<div class="col-md-12 text-center" style="margin-top:7px;">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								Copyright DJ Cellular &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
							
							</span>
						</div>
					</div>
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
