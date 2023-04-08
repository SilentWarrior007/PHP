<?php require_once 'header.php';?>
<?php
session_start();
unset($_SESSION["email"]);
session_destroy();
redirect("login.php");
?>
<?php require_once 'footer.php';?>