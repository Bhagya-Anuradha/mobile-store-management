<?php

include "header.php";

?>
   
   
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Our-Team</title>
</head>

<style>

.container {
}

.sub-container {
	text-align: center;

}

.teamheader {
    padding-top: 4px;
    color: #444;
    font-size: 20px;
    margin: auto;
    line-height: 10px;
}

.sb-container {
	padding-top: 10px;
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.teams {
	font weight: bold;
    margin: 10px;
    padding: 22px;
    max-width: 30%;
    cursor: pointer;
    transition: 0.4s;
    box-sizing: border-box;
}

.teams:hover {
    background: #ddd;
    border-radius: 12px;
	transform: scale(1.03);
}

.teams img {
    width: 200px;
    height: 180px;
}

.name {
    padding: 12px;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
}

.desig {
    font-style: italic;
    color: #888;
}

.about {
    margin: 20px 0;
    font-weight: lighter;
    color: #4e4e4e;
}

.social-links {
    margin: 14px;
}

.social-links a {
    display: inline-block;
    height: 30px;
    width: 30px;
    transition: .4s;
}

.social-links a:hover {
    transform: scale(1.5);
}

.social-links a i {
    color: #444;
}

@media screen and (max-width: 600px) {
    .teams {
        max-width: 100%;
    }
}

.map {
    padding-top: 15px;
	width: 1005;
	height: 630px;
    text-align: center;
}

.maptitle {
	padding-top: 10px;
    color: #444;
    font-size: 20px;
    margin: auto;
    line-height: 10px;
	font-weight: bold;
	line-height: 60px;
}

.mapimage {
	padding-top: 100;
	width: auto;
	height: auto;
}


</style>


<body>
<div class="sub-container">
		<div class="teamheader">
			<h2>Our Team</h2>
		</div>

	<div class="sb-container">
		<div class="teams">
			<img src="img/profile1.png" alt="profile1">
			<div class="name">Pasindu Umayantha</div>
			<div class="desig">Sales Manager</div>
			<div class="about">What are you looking to buy? Tell us and we'll help</div>

			<div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>

		</div>

		

		<div class="teams">
                <img src="img/profile2.png" alt="profile2">
                <div class="name">Sanjaya Pathirana </div>
                <div class="desig">Web Designer</div>
                <div class="about">Design is thinking made visual </div>

				<div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
        </div>

			<div class="teams">
                <img src="img/profile3.png" alt="profile3">
                <div class="name">Shanaka Pathirana </div>
                <div class="desig">Manager</div>
                <div class="about">we work to provide a maximum service to customers.
                </div>
					
				<div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>	
</dv>
<div class="map">
		<div class="maptitle">Visit Our Shop Now</div>
			<img class="mapimage" src="img/map.png" alt="map">
		</div>
</body>


		<div>
		
		
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner2.png" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner3.png" style="width:100%;">
        
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
<?php
echo " _  "
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
</html>

<?php

include "footer.php";
?>