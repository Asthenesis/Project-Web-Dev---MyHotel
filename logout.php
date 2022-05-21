<?php

    session_start();

    //Remove all session variables
    session_unset();

    //destroy the session
    session_destroy();

    echo "<script type = 'text/javascript'>
    window.location.replace('login.php');</script>";

?>

