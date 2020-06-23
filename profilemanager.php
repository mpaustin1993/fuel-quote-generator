<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/override.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/LogoNoBackground.png" />
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
    <link rel="stylesheet" type="text/css" href="css/overmain.css">
    <!--===============================================================================================-->
</head>



<body>
    <div class="container">
        <?php
        include 'navbar.php';
        ?>
        <div class="limiter">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img style="width: 30rem;" src="images/undraw_profile_6l1l.svg" alt="IMG">

                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Your Profile
                    </span>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" placeholder=<?php echo $_SESSION['username'] ?>>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="email" placeholder=<?php echo $_SESSION['email'] ?>>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="name" placeholder="Full Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="address1" placeholder="Address">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="address2" placeholder="Apt. #">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="city" placeholder="City">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <select class="input100" type="text" name="state">
                            <option value="" hidden>State</option>
                            <option value="TX">TX</option>
                            <option value="AZ">AZ</option>
                            <option value="MS">MS</option>
                            <option value="TE">TE</option>
                        </select>
                        <span class="symbol-input100">
                            <i class="fa fa-map" aria-hidden="true"></i>
                        </span>

                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="zip" placeholder="Zip Code">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Edit Profile
                        </button>
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
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
