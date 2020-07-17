<?php
include 'includes/autoloader.inc.php';
// $fuelQuoteObj = new FuelQuoteView();
$clientObj = new ClientProfileView();
$clientData = $clientObj->getClientData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fuel Quote</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For overriding small elements -->
  <link rel="stylesheet" type="text/css" href="css/override3.css">
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
        <span class="login100-form-title">
          Quote History
        </span>
        <!-- Below are much data showing the history of the quote -->
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

          <!-- produces table info for client -->

          <tbody>
            <?php


            $quoteObj = new FuelQuoteView();
            echo $quoteObj->fuelQuoteDataShow();

            ?>
          </tbody>
        </table>
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
