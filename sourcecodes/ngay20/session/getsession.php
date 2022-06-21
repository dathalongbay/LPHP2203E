<?php session_start(); ?>
<?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br>" . $_SESSION["username"];
echo "<br>" . $_SESSION["email"];