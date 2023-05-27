<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Mobile</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		

    <style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2a2a2a, #2a2a2a);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #034682, #008cb8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #348AC7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #348AC7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #348AC7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #348AC7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                       DJ Cellular 
                                    </font>
									
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								
								<form action="search-result.php" method="POST" class="form-horizontal">
									<!-- <select class="input-select" name="cat-select">
										<option value="0">All Categories</option>
										<option value="1">Fruit & vegis</option>
										<option value="2">Grocery </option>
										<option value="3">Bevarages </option>
										<option value="4">Branded foods </option>
										<option value="5">Personal care </option>
									</select>-->
									<input class="input" id="search" name ="search" type="text" placeholder="Search here">
									<!--<button type="submit" id="search_btn" class="search-btn">Search</button> -->
									<button type = "submit" name="header-search" class="search-btn">Search</button>
								</form>
							</div>
							
							
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
						
							<div class="header-ctn"  style="position:relative; right: 0px;">
								<!-- Wishlist -->
								<div>
									
								</div>
								<!-- /Wishlist -->

					<ul class="header-links pull-left" >
					
						
					</ul>
					
					<ul class="header-links pull-right" style="position:relative; z-index: 10;">
						<li><?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    <a href="admin/" ><i class="fa fa-sign-in" aria-hidden="true" ></i>Admin Login</a>
									<a href="staff/" ><i class="fa fa-sign-in" aria-hidden="true" ></i>Staff Login</a>
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>				
					</ul> 
					
					
							
						
					
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
											
										</div>
									</div>
										
									</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<!-- <div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div> -->
								<!-- /Menu Toogle -->
							</div>
											
						
					
		
		<!-- /HEADER
		<nav id='navigation'>
			<!-- container 
            <div class="container" id="get_category_home">
                
            </div>
				<!-- responsive-nav -->
				
			<!-- /container
		</nav>
            

		NAVIGATION -->
		 <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
               
					  
					 <div class="modal fade" id="Modal_forgot" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "forgot_pass.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div> 
					  
					  
					  
					</div>
						<!-- /ACCOUNT -->  
				</div>
					<!-- row -->
					
					<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
					
								<a href="repair.php"  style="padding-right:10px;">
								<font style="font-style:normal; font-size: 20px;color: aliceblue;font-family: serif">
                                        Repair Center
                                    </font>
									
								</a>
									<a href="index.php" style="padding-right:10px;">
								<font style="font-style:normal; font-size: 20px;color: aliceblue;font-family: serif">
                                        Mobile Store
                                    </font>
									
								</a>
									<a href="contact.php" style="padding-right:10px;">
								<font style="font-style:normal; font-size: 20px;color: aliceblue;font-family: serif">
                                        Contact Us
                                    </font>
									
								</a>
							
					
					</div>
					<div class="col-md-3">
					</div>
					</div>
					<!-- row2-->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>