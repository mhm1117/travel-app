<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = htmlspecialchars($_POST['username']);
    $pin = htmlspecialchars($_POST['pin']);
    $return = htmlspecialchars($_POST['returnURL']);

    $open = fopen("../../data/logindata.csv", "r");

    $keys = fgetcsv($open, 1000);

    $canLogin = false;
    while (($data = fgetcsv($open, 1000)) !== FALSE) {

        if ($data[0] == $username and $data[1] == $pin) {
            $canLogin = true;
            session_start();
            $_SESSION["username"] = $data[0];
        }
    }

    if (!$canLogin) {
        echo "Unsuccessful login - try again";
    }
    
    fclose($open);
}

header('Location: ../../' . $_GET['returnURL']);



