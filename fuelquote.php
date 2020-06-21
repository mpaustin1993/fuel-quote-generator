<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fuel Quote</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For overriding small elements -->
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
          <div class="col-lg-8">
            <span class="login100-form-title">
              Quote History
            </span>
            <table class="table table-bordered display" text-align="center" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Delivery Date</th>
                  <th>Gallon(s)</th>
                  <th>Quote</th>
                  <th>Total</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>37</td>
                  <td>10/20/20</td>
                  <td>100</td>
                  <td>$3.40/Gal</td>
                  <td>$340</td>
                  <!-- <td><strong><a href="#"></a></strong></td> -->
                </tr>

                <tr>
                  <td>20</td>
                  <td>09/27/20</td>
                  <td>200</td>
                  <td>$2.70/Gal</td>
                  <td>$540</td>
                </tr>

                <tr>
                  <td>12</td>
                  <td>06/16/20</td>
                  <td>1000</td>
                  <td>$2.59/Gal</td>
                  <td>$2,590</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-lg-4">
            <form class="login120-form validate-form">
              <span class="login100-form-title">
                Fuel Quote
              </span>
              <div class="row">
                <div class="col-sm-6">
                  <h6>Suggested Price / Gallon:</h6>
                  <p>$1.79 / gallon</p>
                  <br>
                </div>
                <div class="col-sm-6">
                  <h6>Number of Gallon(s):</h6>
                  <p>1000 gallon(s)</p>
                  <br>
                </div>

              </div>

              <div class="row">
                <div class="col-sm-6">
                  <h6>Subtotal:</h6>
                  <p>$1,790 / gallon</p>
                  <br>
                </div>
                <div class="col-sm-6">
                  <h6>Taxes(8.25%):</h6>
                  <p>$147.68</p>
                  <br>
                </div>

              </div>



              <h6>Total Amount Due:</h6>
              <h4>$1,937.68 </h4>

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
