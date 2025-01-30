<a?php
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

    <script src=""></script>

    <link rel="icon" type="image/x-icon" href="../assets/travel-icon.svg">
    <title>Travel App Page</title>
</head>
<body>
    <?php include "includes/nav.php";?>

    <main class="container-fluid" style="">
        <div id="content" class="d-grid text-center text-dark bg-secondary-subtle mt-6 w-75 mx-auto mb-4 p-4 
                                rounded row-gap-3 fs-5 pt-3">
            <h1 class="text-maincolor fw-bold text-start mb-3">
                EVENTS
                <a class="link link-maincolor link-underline-opacity-0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 20 20">
                          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                </svg></a>
            </h1>
            <div id="event-list-header" class="event-li row border-bottom border-dark border-3 mb-2">
                <div class="col fw-bold">NAME</div>
                <div class="col fw-bold">DATE</div>
                <div class="col fw-bold">LOCATION</div>
                <div class="col fw-bold">TIME</div>
                <div class="col fw-bold">CATEGORY</div>
            </div>
            <div class="event-li row rounded py-2 align-items-center bg-light shadow-sm">
                <div class="col fw-bold border-end border-dark-subtle border-2"><a class="link link-maincolor link-underline-opacity-0">Pickleball</a></div>
                <div class="col border-end border-dark-subtle border-2">MON 9/2/24</div>
                <div class="col border-end border-dark-subtle border-2">Presido Wall</div>
                <div class="col border-end border-dark-subtle border-2">1:00 PM</div>
                <div class="col"><span class="bg-danger-subtle rounded py-1 px-2">Activity</span></div>
            </div>
            <div class="event-li row rounded py-2 align-items-center bg-light shadow-sm">
                <div class="col fw-bold border-end border-dark-subtle border-2"><a class="link link-maincolor link-underline-opacity-0">Burma Superstar</a></div>
                <div class="col border-end border-dark-subtle border-2">SUN 9/1/24</div>
                <div class="col fw-bold border-end border-dark-subtle border-2"><a class="link link-dark link-underline-opacity-0" href="https://maps.app.goo.gl/BWhgwPD6hhn4EhBY7">Inner Richmond</a></div>
                <div class="col border-end border-dark-subtle border-2">6:00 PM</div>
                <div class="col"><span class="bg-warning-subtle rounded py-1 px-2">Food</span></div>
            </div>
            <div class="event-li row rounded py-2 align-items-center bg-light shadow-sm">
                <div class="col fw-bold border-end border-dark-subtle border-2"><a class="link link-maincolor link-underline-opacity-0">Trip Planning</a></div>
                <div class="col border-end border-dark-subtle border-2">MON 9/2/24</div>
                <div class="col border-end border-dark-subtle border-2">Mom's House</div>
                <div class="col border-end border-dark-subtle border-2">3:00 PM</div>
                <div class="col"><span class="bg-danger-subtle rounded py-1 px-2">Activity</span></div>
            </div>
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