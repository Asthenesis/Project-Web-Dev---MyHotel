<?php

    session_start();

    //Remove all session variables
    unset($_SESSION["adminid"]);

    //destroy the session
    // session_destroy();

    echo "<script type = 'text/javascript'>
    window.location.replace('login-admin.php');</script>";

?>

