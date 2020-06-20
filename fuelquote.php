<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fuel Quote</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For overriding small elements -->
    <link rel="stylesheet" type="text/css" href="css/override.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/LogoNoBackground.png"/>
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

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


</head>



<body>
    <div class="container">

      <?php
      include 'navbar.php';
      ?>

      <div class="limiter">

            <div class="wrap-container">
              <div class="row">
                <div class="col-lg-6">
                  <span class="login100-form-title">
                      Quote History
                  </span>
                  <table class="table table-bordered display" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Quote</th>
                        <th>Date</th>
                        <th>Details</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>20</td>
                        <td>$3.40/Gal</td>
                        <td>10/20/20</td>
                        <td><strong><a href="#">Detail</a></strong></td>

                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-lg-6">
                  <form class="login120-form validate-form">
                      <span class="login100-form-title">
                          Fuel Quote
                      </span>
                      <div class="row">
                        <div class="col-sm-6">
                          <h6>Suggested Price / Gallon:</h6>
                          <p>$  / gallon</p>
                          <br>
                        </div>
                        <div class="col-sm-6">
                          <h6>Number of gallon:</h6>
                          <p>gallon</p>
                          <br>
                        </div>

                      </div>

                      <h6>Total Amount Due:</h6>
                      <p>$ </p>

                      <div class="container-login100-form-btn">
                          <a class="login100-form-btn" href="fuelquoteform.php" role="button">
                              Get New Quote
                          </a>
                      </div>

                  </form>
                </div>

              </div>
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

        // Call the dataTables jQuery plugin
        $(document).ready(function() {
          $('table.display').DataTable();
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Page level plugins For Datatables.net -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>
