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
            echo "Successful Login! Welcome " . $username . "!";
            $canLogin = true;
        }
    }

    if (!$canLogin) {
        echo "Unsuccessful login - try again";
    }
    
    fclose($open);
} else {
    header('Location: ../../' . $_GET['returnURL']);
}



