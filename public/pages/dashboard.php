<?php
session_start();
if(!isset($_SESSion['login'])){
header('location:/?q=login');
exit();
}
require_once "public/includes/header.php";
require_once "public/includes/navbar.php";
?>

<h1> dashboard </h1>

<?php
require_once "public/includes/footer.php";
?>
