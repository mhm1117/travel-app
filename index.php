<?php
require_once "includes/signup/signup_view.inc.php";
require_once "includes/login/login_view.inc.php";
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
    <!-- <form action="includes/login/logout.inc.php" method="post" class="position-absolute top-0 end-0 mt-3 me-3">
        <button type="submit" class="btn btn-light fw-bold">Log Out</button>
    </form> -->

    <a class="text-decoration-none link-mainlight" href="index.php">
        <h1 class="fw-bold text-mainlight bg-white mx-auto mt-5 pb-2 px-3 rounded-4 fs-lg mt-sm-7" 
        style="width: fit-content;">Travel App</h1>
    </a>
    
    <div id="loginDiv" class="container d-flex flex-column 
    position-absolute top-50 start-50 translate-middle py-2 w-75 rounded-4 bg-white" 
    style="max-width: 500px">
        <div id="signupSuccMsg" class="mb-3 text-center fw-bold">
            <?php check_signup_success(); ?>
        </div>
        <h2 class="fw-bold text-center" id="signInLabel">Log In</h2>
        <form action="includes/login/login.inc.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label fw-bold fs-5">Name:</label>
                <input type="text" id="usernameLI" name="username" class="form-control mb-2" placeholder="Your first name.">

                <label for="pin" class="form-label fw-bold fs-5">Pin:</label>
                <input type="password" id="pinLI" name="pin" class="form-control mb-2" placeholder="Your 4 digit passcode.">
            </div>  
            <div id="logInErrs" class="mb-3 text-center fw-bold">
                <?php check_login_errors(); ?>
            </div>
            <div class="text-center">
                <button type="submit" id="logInBtn" class="btn btn-mainlight px-3 fw-bold">Log In</butto>
            </div>
        </form>
        <a id="createAcctBtn" class="link link-maincolor text-end me-2 my-2" href="createAccount.php">Create Account</a>
    </div>

    <?php include "includes/footer.inc.php" ?>
</body>
</html>

