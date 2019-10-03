<?php

require_once 'inc/init.php';

session_start();

session_unset();


session_destroy();

redirect_to("login.php");


?>