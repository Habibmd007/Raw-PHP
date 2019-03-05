<?php
include("head.php");
   

?>

 <!--Custom styles-->
 <link rel="stylesheet" type="text/css" href="styles.css">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
       
			<div class="card-header">
				<h3> <?php  if (isset($_REQUEST["txt"])) {
					echo $_REQUEST["txt"];
					}?></h3>
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">


				<form action="../controll/LoginController.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="email" type="email" class="form-control" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="Login" class="btn float-right login_btn">
					</div>
				</form>



			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("foot.php")?>