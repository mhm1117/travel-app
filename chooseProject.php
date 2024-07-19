<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/styles.css"/>

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="js/chooseProject.js"></script>

    <link rel="icon" type="image/x-icon" href="../assets/travel-icon.svg">
    <title>Travel App Page</title>
</head>
<body>
  
    <?php include "includes/nav.php" ?>

    <main class="d-flex flex-column container-fluid" style="height: 100vh;">
        <div id="content" class="bg-secondary-subtle rounded 
                                  position-absolute w-75 start-50 translate-middle-x 
                                  d-flex flex-column gap-4 justify-content-start
                                  gap-sm-6 pb-sm-6" style="top: 20%;">
            <h1 class="text-maincolor fw-bolder mt-3">
                <span class="ms-4 me-1">SWITCH TRIP</span>
                <div class="d-inline-block">
                    <a type="button" class="button btn-maincolor text-maincolor" data-bs-toggle="modal" data-bs-target="#addTripModal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 20 20">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                      </svg>
                    </a>
                </div>
            </h1>

            <div id="trips" class="d-flex flex-wrap column-gap-4 justify-content-center">
              <?php 
                include "includes/editTrips/getTrips.php";

                foreach ($results as $trip) {
                  echo '<div class="card mb-4" style="width: 250px; height: fit-content;">
                          <img src=' . $trip["img"] . ' class="d-none d-sm-block card-img-top" alt="trip-image" style="max-height: 25%;">
                          <div class="card-body">
                            <h5 class="card-title">' . $trip["name"] . '</h5>
                            <p class="card-text">' . $trip["description"] . '</p>
                            <div class="d-flex flex-nowrap align-items-center justify-content-between">
                              <a href="../index.php" class="btn btn-maincolor">Select Trip</a>
                              <span>
                                <a type="button" id="editTripBtn" class="text-maincolor" data-bs-toggle="modal" data-bs-target="#editTripModal">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentcolor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg>
                                </a>
                                <a type="button" id="delTripBtn" class="text-maincolor" data-bs-toggle="modal" data-bs-target="#delTripModal">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                  </svg>
                                </a>
                              </span>
                            </div>
                          </div>
                        </div>';
                }
              ?>
            </div>
        </div>
    </main>
</body>
<?php include "includes/account/loginModal.php"?>

<?php include "includes/editTrips/addTrip.php"?>

<?php include "includes/editTrips/delTrip.php"?>

<?php include "includes/editTrips/editTrip.php"?>
</html>