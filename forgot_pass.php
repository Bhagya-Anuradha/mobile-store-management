<?php

if (isset($_SESSION['user'])) {
	
if(trim($_POST['pass'])=='' || trim($_POST['pass2'])=='')
{
    echo('All fields are required!');
}
else if($_POST['pass'] != $_POST['pass2'])
{
    echo('Passwords do not match!');
}

}

include("./db.php");




if(isset($_POST['update']))
  {
$email=$_POST['email'];
$pass=$_POST['newpassword'];
//$mobile=$_POST['mobile'];

$query = "SELECT * FROM user_info WHERE email='$email'";
	$run_query = mysqli_query($con,$query);
	if(mysqli_num_rows($run_query) > 0){
		//while($row = mysqli_fetch_array($run_query)){
		//	$r_id    = $row['request_id'];
		//}
		
	$query1 = "UPDATE user_info SET password = '$pass' WHERE email='$email'";
	$run_query = mysqli_query($con,$query1);
		
	echo "<script>alert('Your Password succesfully changed');</script>";	
		
	}

else {
echo "<script>alert('Email id is invalid');</script>"; 
}
}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						<!-- Billing Details -->
						<form name="chngpwd" method="post" onSubmit="return valid();">
						<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Login Here</h2>
                                    </div>
									<div class="form-group">
                                       <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Your Email address" id="email" required>
										
									</div>
									<div class="form-group">
                                       <label for="email">New Password</label>
                                        <input class="input input-borders" type="password" name="newpassword" placeholder="New Password" id="newpassword" required>
										
									</div>
                                    <div class="form-group">
                                       <label for="email">Retype Password</label>
                                        <input class="input input-borders" type="password" name="confirmpassword" placeholder="Confirm Password" id="password" required>
										
									</div>
                                    
                                    
                                        <input class="primary-btn btn-block"   type="submit" value="Reset My Password" name="update" >
                                        
                                       		<!-- <div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>-->

                                </div>
                                
								</form>
						<!-- /Billing Details 
						
						
								<form action="forgot_pass.php" method="post" ">
								 
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Login Here</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                       <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label for="email">New Password</label>
                                        <input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="email">Retype Password</label>
                                        <input class="input input-borders" type="password" name="password1" placeholder="password" id="password" required>
                                    </div>
                                    
                                    
                                        <input class="primary-btn btn-block"   type="submit"  Value="Login">
                                        
                                       		

                                </div>-->
                                
								</form>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>				











								
                     <!--      <form name="chngpwd" method="post" onSubmit="return valid();">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" name="update" class="btn btn-block">
                </div>
              </form>
						 Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>