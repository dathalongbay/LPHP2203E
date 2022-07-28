<?php
include_once "connect.php";

$sql = 'SELECT * FROM books';
$statement = $pdo->query($sql);
$books = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($books);
echo "</pre>";