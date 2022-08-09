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

    <?php
    if (isset($_SESSION['message']) && $_SESSION['message']) {
        if (isset($_SESSION['result']) && $_SESSION['result'] == true) {
            ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['message'] ?>
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['message'] ?>
            </div>
            <?php
        }
        unset($_SESSION['message']);
    }
    ?>

    <form name="add-book" method="post" action="<?php echo SITE_URL ?>?controller=book&action=update">

        <input type="hidden" name="book_id" value="<?php echo $book['book_id'] ?>">

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Tên sách:</label>
            <input type="text" class="form-control" id="book_title" placeholder="Tên sách" name="book_title" value="<?php echo $book['book_title'] ?>">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Giá sách:</label>
            <input type="text" class="form-control" id="book_price" placeholder="Giá sách" name="book_price" value="<?php echo $book['book_price'] ?>">
        </div>

        <div class="mb-3 mt-3">
            <label for="comment">Giới thiệu:</label>
            <textarea class="form-control" rows="5" id="book_intro" name="book_intro"><?php echo $book['book_intro'] ?></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="comment">Mô tả:</label>
            <textarea class="form-control" rows="5" id="book_content" name="book_content"><?php echo $book['book_content'] ?></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Thời gian tạo sách:</label>
            <input type="datetime-local" class="form-control" id="book_created" placeholder="Giá sách" name="book_created" value="<?php echo $book['book_created'] ?>">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Tác giả:</label>
            <select class="form-select" name="book_author" id="book_author">
                <option value="">chọn tác giả</option>
                <?php
                if (is_array($authors) && !empty($authors)) {
                    foreach ($authors as $author) {
                        $selected = ($author['author_id'] == $book['book_author']) ? 'selected' : '';
                        ?>
                        <option value="<?php echo $author['author_id'] ?>" <?php  echo $selected ?>><?php echo $author['author_name'] ?></option>
                        <?php
                    }
                }
                ?>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

</body>
</html>