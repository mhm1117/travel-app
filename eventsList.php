<?php
  require_once "includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>"/>

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="js/chooseEvent.js"></script>

    <link rel="icon" type="image/x-icon" href="../assets/travel-icon.svg">
    <title>Travel App Page</title>
</head>
<body>
    <?php include "includes/nav.php"; ?>

    <?php include "includes/currentTripNav.inc.php"; ?>

    <?php include "includes/editEvents/addEvent.php"; ?>

    <main class="d-flex flex-column container-fluid" style="">
        <div id="content" class="text-center text-dark bg-secondary-subtle mt-6 mb-4 w-75 mx-auto p-4
                                rounded fs-5" style="max-width: 1000px;">
            
            <?php if(isset($_SESSION["user_id"])) {
              echo '
                <h1 class="text-maincolor fw-bold text-start mb-4">
                <span>EVENTS</span>
                <a class="link link-maincolor link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#addEventModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 20 20">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                    </svg>
                </a>
                </h1>'; } ?>

            <?php include "includes/events/getEvents_view.inc.php" ?>

        </div>
        <!-- <div id="content" class="d-grid bg-secondary-subtle rounded mt-6 w-75 mx-auto mb-4 p-3
                                 row-gap-2 border border-maincolor border-2">
            <h2 class="text-maincolor px-2 fw-bold">Events List</h2>
            <div class="event-li d-flex justify-content-around border border-dark py-2 rounded">
                <p class="fs-5 my-auto fw-bold"><a class="link link-maincolor">Volcano Curry</a></p>
                <p class="fs-5 my-auto">THUR 8/29/24</p>
                <p class="fs-5 my-auto">5:00PM</p>
                <p class="fs-5 my-auto px-1 bg-warning-subtle rounded">Food</p>
                <p class="fs-5 my-auto">Geary Blvd</p>
                <button class="btn btn-maincolor fs-5 my-auto py-0 px-2">Edit</button>
            </div>
            <div class="event-li d-flex justify-content-around border border-dark rounded py-2">
                <p class="fs-5 my-auto fw-bold"><a class="link link-maincolor">Work</a></p>
                <p class="fs-5 my-auto">FRI 8/30/24</p>
                <p class="fs-5 my-auto">9:15AM</p>
                <p class="fs-5 my-auto px-1 bg-warning-subtle rounded">Work</p>
                <p class="fs-5 my-auto">Mendocino Farms</p>
                <button class="btn btn-maincolor fs-5 my-auto py-0 px-2">Edit</button>
            </div>
        </div> -->
    </main>
</body>
</html>