<?php
session_start();
session_unset(); //removes all the session variables
session_destroy(); //destroy the session

header("location: login.php");
?>