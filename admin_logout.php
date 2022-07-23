<?php

session_start();
unset($_SESSION['admin_details']);
header("Location: admin_login.php"); 
?>