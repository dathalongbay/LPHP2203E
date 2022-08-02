<?php
session_start();
include_once "connect.php";

echo '<br>' . __FILE__;
echo "<pre>";
print_r($_POST);
echo "</pre>";


$sql = 'UPDATE books
        SET book_title = :book_title,book_price = :book_price,
            book_intro = :book_intro, book_content = :book_content,
            book_created = :book_created, book_author = :book_author
        WHERE book_id = :book_id';

// prepare statement
$statement = $pdo->prepare($sql);

// bind params
$statement->bindParam(':book_title', $_POST['book_title'], PDO::PARAM_STR);
$statement->bindParam(':book_price', $_POST['book_price']);
$statement->bindParam(':book_intro', $_POST['book_intro'], PDO::PARAM_STR);
$statement->bindParam(':book_content', $_POST['book_content'], PDO::PARAM_STR);
$statement->bindParam(':book_created', $_POST['book_created']);
$statement->bindParam(':book_author', $_POST['book_author'], PDO::PARAM_INT);
$statement->bindParam(':book_id', $_POST['book_id'], PDO::PARAM_INT);

// execute the UPDATE statment
if ($statement->execute()) {
    $_SESSION['result'] = true;
    $_SESSION['message'] = 'Cập nhật thành công';

    header("Location: edit.php?id=".$_POST['book_id']);
    exit;
} else {
    $_SESSION['result'] = false;
    $_SESSION['message'] = 'Cập nhật thất bại';
    header("Location: edit.php?id=".$_POST['book_id']);
    exit;
}
