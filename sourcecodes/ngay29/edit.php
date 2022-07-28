<?php
include_once "connect.php";

$bookId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// lấy bản ghi tương đương id này trong bảng books để fill tất cả dữ liệu
// vào trong các ô input bên dưới

$sql = 'SELECT * FROM authors';
$statement = $pdo->query($sql);
$authors = $statement->fetchAll(PDO::FETCH_ASSOC);
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


<div class="container">
    <h1>Sửa sách</h1>
    <form name="add-book" method="post" action="">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Tên sách:</label>
            <input type="text" class="form-control" id="book_title" placeholder="Tên sách" name="book_title">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Giá sách:</label>
            <input type="text" class="form-control" id="book_price" placeholder="Giá sách" name="book_price">
        </div>

        <div class="mb-3 mt-3">
            <label for="comment">Giới thiệu:</label>
            <textarea class="form-control" rows="5" id="book_intro" name="text" name="book_intro"></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="comment">Mô tả:</label>
            <textarea class="form-control" rows="5" id="book_content" name="text" name="book_content"></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Thời gian tạo sách:</label>
            <input type="datetime-local" class="form-control" id="book_created" placeholder="Giá sách" name="book_created">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Tác giả:</label>
            <select class="form-select" name="book_author" id="book_author">
                <option value="">chọn tác giả</option>
                <?php
                if (is_array($authors) && !empty($authors)) {
                    foreach ($authors as $author) {
                        ?>
                        <option value="<?php echo $author['author_id'] ?>"><?php echo $author['author_name'] ?></option>
                        <?php
                    }
                }
                ?>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tạo sách</button>
    </form>
</div>

</body>
</html>