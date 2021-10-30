<?php
    require_once("../resources/config.php");
?>
<?php
    include(Front_End . DS . "headerguest.php");
?>


<h1 class="text-center">Register</h1>
<p class="text-center bg-warning">
    <?php
        displayMessage();
    ?>
</p>

<div class="container h-100" style="margin-top: 150px; margin-bottom: 150px;">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="images/logo.png" class="brand_logo" alt="Havenly Beds Logo">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form method="POST">
					<?php
						registerUser();
					?>
					<div class="input-group mb-3">
						<input type="text" name="name" id="name" class="form-control input_user" required placeholder="Name">
                    </div>
                    <div class="input-group mb-3">
						<input type="text" name="email" id="email" class="form-control input_user" required placeholder="Email Address">
					</div>
					<div class="input-group mb-2">
						<input type="text" name="number" id="number" class="form-control input_pass" required placeholder="Phone Number">
					</div>
					<div class="input-group mb-2">
						<input type="password" name="password" id="password" class="form-control input_pass" required placeholder="Password">
					</div>			
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="submit" class="btn btn-primary login_btn" value="Register">
                    </div>
			    </form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Great Now Go and <strong><a href="login.php" class="ml-2">Login</a></strong>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    include(Front_End . DS . "footer.php");
?>

