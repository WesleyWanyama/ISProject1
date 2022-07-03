<?php

session_start();
unset($_SESSION['user_details']);
header("Location: rider_login.php"); 
?>