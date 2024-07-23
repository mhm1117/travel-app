<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pin = $_POST["pin"];
    
    try {
        require_once "../dbhandling.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        $errors = [];

        if (is_input_empty($username, $pin)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        
        $result = get_user($pdo, $username);

        if (is_username_wrong($result)) {
            $errors["incorrect_username"] = "Incorrect username!";
        }
        if (!is_username_wrong($result) && is_pin_wrong($pin, $result["pin"])) {
            $errors["incorrect_pin"] = "Incorrect pin!";
        }

        require_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            
            header("Location: ../../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../../chooseProject.php?login=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query Failed: ". $e->getMessage());
    }
} else {
    header("Location: ../../index.php");
    die();
}



