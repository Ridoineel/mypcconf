

<?php
    session_start();

    $key = "ridoine";
    $right_pass = "ri4QGtWHfZ2bs";

    if (isset($_POST["password"]) && crypt($_POST["password"], $key) == $right_pass) {
        $_SESSION["connected"] = true;
    }

    header("Location: ../tg/");
?>
