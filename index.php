<?php
$error = $_GET["error"];
switch ($error) {
    case "200":
        header("Location: http://localhost:63342/RHS/200.php");
        break;

    case "301":
        header("Location: http://localhost:63342/RHS/301.php");
        break;

    case "302":
        header("Location: http://localhost:63342/RHS/302.php");
        break;

    case "404":
        header("Location: http://localhost:63342/RHS/404.php");
        break;

    case "422":
        header("Location: http://localhost:63342/RHS/422.php");
        break;

    case "500":
        header("Location: http://localhost:63342/RHS/500.php");
        break;

    case "505":
        header("Location: http://localhost:63342/RHS/505.php");
        break;

    default:
        header("Location: http://localhost:63342/RHS/index.html");
        break;
}