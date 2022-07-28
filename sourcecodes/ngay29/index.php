<?php
include_once "connect.php";

$sql = 'SELECT b.*,a.author_name FROM books as b LEFT JOIN `authors` as a ON b.book_author = a.author_id ';
$statement = $pdo->query($sql);
$books = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên sách</th>
            <th>Giá tiên</th>
            <th>Thời gian xuất bản</th>
            <th>Tác giả</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if (is_array($books) && !empty($books)) {
            foreach ($books as $book) {
                ?>
                <tr>
                    <td><?php echo $book['book_id'] ?></td>
                    <td><?php echo $book['book_title'] ?></td>
                    <td><?php echo $book['book_price'] ?></td>
                    <td><?php echo $book['book_created'] ?></td>
                    <td><?php echo $book['author_name'] ?></td>
                </tr>
                <?php
            }
        }
        ?>



        </tbody>
    </table>
</div>
</body>
</html>
