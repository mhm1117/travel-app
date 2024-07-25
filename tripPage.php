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
    <?php display_trip_img() ?>

    <?php include "includes/nav.php" ?>

    <main class="d-flex flex-column container-fluid">
      
      <div id="trip-info" class="d-flex flex-column container text-center gap-4" style="margin-top: 15vh;">
        <?php display_trip_info() ?>
      </div>
    </main>

    <?php include "includes/footer.inc.php" ?>
  </body>
</html>
