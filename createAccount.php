<?php
require_once "includes/signup/signup_view.inc.php";
require_once "includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/main.min.css">
    <link rel="stylesheet" href="../../css/styles.css"/>

    <script src="js/script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/travel-icon.svg">
    <title>Travel App</title>
</head>
<body class="bg-mainlight">

    <a class="text-decoration-none link-mainlight" href="index.php">
        <h1 class="fw-bold text-mainlight bg-white mx-auto mt-5 pb-2 px-3 rounded-4 fs-lg mt-sm-7" 
        style="width: fit-content;">Travel App</h1>
    </a>

    <div id="signupDiv" class="container d-flex flex-column position-absolute top-50 start-50 translate-middle py-2 w-75
                 rounded-4 bg-white" style="max-width: 500px;">
            <h2 class="fw-bold text-center" id="signInLabel">Create Account</h2>
            <form action="includes/signup/signup.inc.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label fw-bold fs-5">Name:</label>
                    <?php signup_username_input(); ?>
                    <label for="pin" class="form-label fw-bold fs-5">Pin:</label>
                    <input type="password" id="pinSU" name="pin" class="form-control mb-2" placeholder="Create a 4 digit passcode.">
                </div>  
                <div id="signUpErrs" class="text-center fw-bold">
                    <?php check_signup_errors(); ?>
                </div>
                <div class="text-center">
                    <button type="submit" id="signUpBtn" class="btn btn-mainlight px-3 fw-bold">Sign Up</button>
                </div>
            </form>
            <a id="alreadyAcctBtn" class="link link-maincolor text-end me-2 my-2" href="index.php">Already have an account?</a>
    </div>

    <?php include "includes/footer.inc.php" ?>
</body>
</html>