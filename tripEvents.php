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

    <script src=""></script>

    <link rel="icon" type="image/x-icon" href="../assets/travel-icon.svg">
    <title>Travel App Page</title>
</head>
<body>
    <?php include "includes/nav.php";?>

    <main class="container-fluid" style="">
        <div id="content" class="d-grid bg-secondary-subtle rounded mt-6 w-75 mx-auto mb-4 p-3
                                 row-gap-2 border border-maincolor border-2">
            <h2 class="text-maincolor px-2 fw-bold">Events List</h2>
            <div class="d-flex justify-content-around border border-dark py-2 rounded">
                <p class="fs-5 my-auto">Event Title</p>
                <p class="fs-5 my-auto">This is a brief description!</p>
                <p class="fs-5 my-auto">TUES 12/31</p>
                <button class="btn btn-maincolor fs-5 my-auto py-0 px-2">Edit</button>
            </div>
            <div class="d-flex justify-content-around border border-dark rounded py-2">
                <p class="fs-5 my-auto">Event Title</p>
                <p class="fs-5 my-auto">This is a brief description!</p>
                <p class="fs-5 my-auto">TUES 12/31</p>
                <button class="btn btn-maincolor fs-5 my-auto py-0 px-2">Edit</button>
            </div>
        </div>
    </main>
</body>
</html>