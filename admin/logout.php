<?php require_once("includes/header.php"); ?>

<?php 
//object for logout
$session->logout();
redirect("login.php");

?>