<?php
include 'includes/autoloader.inc.php';
// $fuelQuoteObj = new FuelQuoteView();
$clientObj = new ClientProfileView();
$clientData = $clientObj->getClientData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fuel Quote Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For overriding small elements -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
                <div class="js-tilt" data-tilt>
                    <img style="width: 35rem;" src="images/undraw_data_report_bi6l.svg" alt="IMG">
                </div>

                <form action="includes/fuelquote.inc.php" class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
                        Fuel Quote Form
                    </span>

                    <?php
                    if ($clientData == NULL) {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        You must complete your profile before you can generate a fuel quote.
                        </div>';
                    }
                    ?>

                    <div class="row info-row">
                        <div class="col-lg-12">
                            <p class="info-topic">Delivery Address:</p>
                            <p class="info-data"><?php
                                                    if ($clientData != NULL) {
                                                        echo $clientData['address1'] . " " . $clientData['address2'] . ", " . $clientData['city'] . ", " . $clientData['state'] . " " . $clientData['zip'];
                                                    } else {
                                                        echo 'N/A';
                                                    }
                                                    ?></p>
                            <hr>
                        </div>
                    </div>

                    <!-- passing clientId -->

                    <input type="hidden" name="clientid" value="<?php echo $_SESSION['client']; ?>">

                    <input type="hidden" name="state" value="<?php echo $clientData['state']; ?>">

                    <div class="wrap-input100 validate-input" data-validate="Gallons requested">
                        <input class="input100" type="number" name="gallons" required placeholder="Gallons Requested">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="deliveryDate" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Delivery Date" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" name="quote-input" class="login100-form-btn">
                            Generate Quote
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        <a class="txt2" href="fuelquote.php">
                            Demo Quote
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"> </script>
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