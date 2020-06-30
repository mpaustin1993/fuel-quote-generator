<?php
include 'includes/autoloader.inc.php';
$clientObj = new ClientProfileView();
$clientData = $clientObj->getClientData();
?>

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

                <form class="login100-form validate-form" action="includes/editprofile.inc.php" method="POST">
                    <span class="login100-form-title">
                        Your Profile
                    </span>

                    <?php

                    if (isset($_GET['error'])) { //when we have something equal to something in URL, use _GET method
                        if ($_GET['error'] == 'invalidname') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    							Please enter your first and last name in the following format: First Last
                    						  </div>';
                        } elseif ($_GET['error'] == 'invalidaddress') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    							Please enter a valid address.
                    						  </div>';
                        } elseif ($_GET['error'] == 'invalidaddress2') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    							Please enter a valid apartment number.
                    						  </div>';
                        } elseif ($_GET['error'] == 'invalidcity') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    							Please enter a valid city name.
                                  </div>';
                        } elseif ($_GET['error'] == 'invalidstate') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    							Please select a state.
                    						  </div>';
                        } elseif ($_GET['error'] == 'invalidzip') {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      							Please enter a valid zip code.
                      						  </div>';
                        }
                    } elseif (isset($_GET['editprofile'])) {
                        if ($_GET['editprofile'] == "success") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    							Profile updated!
                    						  </div>';
                        }
                    }
                    ?>

                    <table class="table table-striped display" text-align="center" cellspacing="0">

                        <tbody>
                            <tr>
                                <td><strong>Username</strong></td>
                                <td><?php echo $_SESSION['username']; ?></td>
                            </tr>

                            <tr>
                                <td><strong>Email</strong></td>
                                <td><?php echo $_SESSION['email']; ?></td>
                            </tr>

                            <tr>
                                <td><strong>Full Name</strong>
                                <td><?php
                                    if ($clientData != NULL) {
                                        echo $clientData['name'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Address</strong>
                                <td><?php
                                    if ($clientData != NULL) {
                                        echo $clientData['address1'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Apt. #</strong>
                                <td><?php
                                    if ($clientData != NULL) {
                                        echo $clientData['address2'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>City</strong>
                                <td><?php
                                    if ($clientData != NULL) {
                                        echo $clientData['city'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>State</strong>
                                <td><?php
                                    if ($clientData != NULL) {
                                        echo $clientData['state'];
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Zip Code</strong>
                                <td> <?php
                                        if ($clientData != NULL) {
                                            echo $clientData['zip'];
                                        } else {
                                            echo 'N/A';
                                        }
                                        ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="editprofile-submit">
                            Edit Profile
                        </button>
                    </div>
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