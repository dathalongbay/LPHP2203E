<?php
session_start();
include_once "connect.php";

echo '<br>' . __FILE__;
echo "<pre>";
print_r($_POST);
echo "</pre>";

$pdo = require_once 'connect.php';

// insert a single publisher
$name = 'Macmillan';
$sql = 'INSERT INTO publishers(name) VALUES(:name)';

$statement = $pdo->prepare($sql);

$statement->execute([
    ':name' => $name
]);

$publisher_id = $pdo->lastInsertId();

echo 'The publisher id ' . $publisher_id . ' was inserted';
