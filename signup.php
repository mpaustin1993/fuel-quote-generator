<!DOCTYPE html>
<html lang="en">
<head>
	<title>Member Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/override.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img style="width: 30rem;" src="images/undraw_add_user_ipe3.png" alt="IMG">

				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Signup
					</span>

          <div class="row">
            <div class="col-sm-6">
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
    						<input class="input100" type="text" name="userfirst" placeholder="First Name">
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
    							<i class="fa fa-address-card" aria-hidden="true"></i>
    						</span>
    					</div>
            </div>
            <div class="col-sm-6">
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
    						<input class="input100" type="text" name="userlast" placeholder="Last Name">
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
    							<i class="fa fa-address-card" aria-hidden="true"></i>
    						</span>
    					</div>
            </div>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="address1" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="address2" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

          <div class="row">
            <div class="col-sm-6">
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
    						<input class="input100" type="text" name="city" placeholder="City">
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
    							<i class="fa fa-address-card" aria-hidden="true"></i>
    						</span>
    					</div>
            </div>
            <div class="col-sm-6">
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
    						<select class="input100" type="text" name="state" placeholder="State">
                  <option value="TX">TX</option>
                  <option value="AZ">AZ</option>
                  <option value="MS">MS</option>
                  <option value="TE">TE</option>
                  </select>
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
    							<i class="fas fa-map-signs" aria-hidden="true"></i>
    						</span>
    					</div>



            </div>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass-confirm" placeholder="Password Confirm">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgotpassword.php">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Already have an account? Log in
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
