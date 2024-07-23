<?php
  require_once "includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>"/>

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="js/chooseProject.js"></script>

    <link rel="icon" type="image/x-icon" href="../assets/travel-icon.svg">
    <title>Travel App Page</title>
</head>
<body class="">
    <?php include "includes/nav.php" ?>

    <main class="d-flex flex-column container-fluid" style="">
        <div id="content" class="bg-secondary-subtle rounded mt-6 w-75 mx-auto mb-4
                                  d-flex flex-column gap-4 justify-content-start
                                  gap-sm-6 pb-sm-4" style="top: 20%;">

            <?php if(isset($_SESSION["user_id"])) {
              echo '
                <h1 class="text-maincolor fw-bolder mt-3">
                  <span class="ms-4 me-1">SWITCH TRIP</span>
                  <div class="d-inline-block">
                      <a type="button" class="button btn-maincolor text-maincolor" data-bs-toggle="modal" data-bs-target="#addTripModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 20 20">
                          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                        </svg>
                      </a>
                  </div>
                </h1>'; } ?> 
            

            <div id="trips" class="d-flex flex-wrap column-gap-4 justify-content-center">
              <?php require_once "includes/userTrips/getTrips.php"?>
            </div>
        </div>
    </main>
</body>

<?php include "includes/editTrips/addTrip.php"?>

<?php include "includes/editTrips/delTrip.php"?>

<?php include "includes/editTrips/editTrip.php"?>

</html>