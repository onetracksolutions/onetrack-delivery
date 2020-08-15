<?php include("includes/header-login.inc.php"); ?>

<div class="limiter">
	<div class="container-login100">
		<div class="login100-more" style="background-image: url('images/leftcolumn.jpg');"></div>

		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			<form class="login100-form validate-form" action="includes/login.inc.php" method="POST" name="login">
				<img src="images/logo.png" class="rounded mx-auto d-block" alt="Logo">
				<span class="login100-form-title p-b-59 col-md-12 text-center">
					<h3>Sign In</h3>
				</span>

				<?php
				if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
					echo '<h6 class="bg-primary text-white">' . $_SESSION['success'] . '</h6>';
					unset($_SESSION['success']);
				}

				if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
					echo '<h6 class="bg-danger text-white">' . $_SESSION['status'] . '</h6>';
					unset($_SESSION['status']);
				}
				?>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" name="emailaddress" placeholder="Email address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="passwd" placeholder="********">
					<span class="focus-input100"></span>
				</div>

				<div class="flex-m w-full p-b-33">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							<span class="txt1">
								Remember me
							</span>
						</label>
					</div>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" name="login_btn" class="login100-form-btn mybtn tx-tfm">
							Login
						</button>
					</div>

					<a href="register.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Sign Up
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include("includes/footer-login.inc.php"); ?>