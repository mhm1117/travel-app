<?php 
require_once "includes/tripPage/tripPage_view.inc.php"; 
require_once "includes/config_session.inc.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="css/styles.css"/>

    <script src="js/script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/travel-icon.svg">
    <title>PNW Train Trip</title>
  </head>
  <body> 

    <?php include "includes/nav.php" ?>

    <main class="d-flex flex-column container-sm text-center p-0 rounded-4 mb-4" style="margin-top: 5vh; width: 80%;">
      <?php display_trip_img() ?>
      <div id="trip-info" class="d-flex flex-column mx-auto bg-white rounded-4 pt-4 gap-3 shadow-sm" style="max-width: 80%; margin-top: -6em;">
        <?php display_trip_info() ?>
        <h1 class="text-dark fw-bold mx-4" style="">PNW Train Trip</h1>
        <div class="fw-bold fs-3 text-dark px-5" style="" id="tripSummary">
            <p>We go on an Amtrak train trip through the Pacifc Northwest
              all the way to Vancouver!
            </p>
        </div>
        <div class="grid fs-5 text-dark text-center pb-3" style="" id="tripDetails">
            <div class="row py-3">
                <div class="col px-5 mt-0">
                    <span class="fw-bold fs-4">Timeline: </span>
                    <span>June 2025</span>
                </div>
                <div class="col px-5 mt-0">
                    <span class="fw-bold fs-4">Locations: </span>
                    <span>Oregon, Seattle, Vancouver</span>
                </div>
            </div>
            <div class="row py-3">
                <div class="col px-5 mt-0">
                    <span class="fw-bold fs-4">Est. Budget: </span>
                    <span>$3000</span>
                </div>
                <div class="col px-5 mt-0">
                    <span class="fw-bold fs-4">Who is Going: </span>
                    <span>Angie, Mattie</span>
                </div>
            </div>
        </div>
      </div>
    </main>

    <?php include "includes/footer.inc.php" ?>
  </body>
</html>
