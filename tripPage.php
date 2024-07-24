<?php 
include "includes/config_session.inc.php";
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
    <?php include "includes/tripPageHandling.inc.php"; ?> 

    <?php include "includes/tripImg.php" ?>

    <?php include "includes/nav.php" ?>

    <main class="d-flex flex-column container-fluid">
      
      <div id="" class="d-flex flex-column container text-center gap-4" style="margin-top: 15vh;">
        <h1 class="text-light" style="font-family: 'Northwest';-webkit-text-stroke: 2px;-webkit-text-stroke-color: var(--bs-dark);"><?php echo $trip["name"]; ?></h1>
        <div class="fw-bolder fs-3 text-light" style="max-width: 90%;-webkit-text-stroke: 2px;-webkit-text-stroke-color: var(--bs-dark);" id="tripSummary">
          <p>
            <?php echo $trip["description"]; ?>
          </p>
        </div>
        <div class="fs-4 text-dark" style="max-width: 90%;-webkit-text-stroke: 1px;-webkit-text-stroke-color: var(--bs-dark);" id="tripDetails">
          <div class="row py-2">
            <div class="col px-5"><span class="fw-bold">Timeline: </span>
              <span>Spring 2025</span>
            </div>
            <div class="col px-5"><span class="fw-bold">Locations: </span>
              <span>Oregon, Seattle, Vancouver</span>
            </div>
          </div>
          <div class="row py-2">
            <div class="col px-5"><span class="fw-bold">Est. Budget: </span>
              <span>Unknown</span>
            </div>
            <div class="col px-5"><span class="fw-bold">Who's Going: </span>
              <span>Mattie and Angie</span>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include "includes/footer.inc.php" ?>
  </body>
</html>
