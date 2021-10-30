<?php
    require_once("../resources/config.php");
?>
<?php
    include(Front_End . DS . "headerguest.php");
?>


<h1 class="text-center">Login</h1>

<h3 class="text-center bg-danger">
    <?php
        displayMessage();
    ?>
</h3>


<div class="container h-100" style="margin-top: 150px; margin-bottom: 150px;">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="images/logo.png" class="brand_logo" alt="Havenly Beds Logo">
				</div>
            </div>	
			<div class="d-flex justify-content-center form_container">
				<form method="post">
                    <?php
                        loginUser();
                    ?> 
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <!-- <button type="button" name="login" id="login" class="btn login_btn">Login</button>  -->
                        <input type="submit" name="submit" class="btn btn-primary login_btn" value="Login">
                    </div>
			    </form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Don't have an account? <strong><a href="register.php" class="ml-2">Sign Up</a></strong>
				</div>
				<!-- <div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> -->
			</div>
		</div>
	</div>
</div>

<?php
    include(Front_End . DS . "footer.php");
?>
