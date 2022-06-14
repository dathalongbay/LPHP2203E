<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .site-wrap {
            width: 100%;
            box-sizing: border-box;
        }
        header {
            height: 200px;
            background-color: grey;
        }

        footer {
            height: 200px;
            background-color: greenyellow;
        }
        nav.main-menu {
            height: 70px;
            background-color: #0a58ca;
        }

        .site-content {
            display: flex;
            flex-direction: row;
        }

        .site-content aside {
            width: 200px;
            height: 400px;
            background-color: orange;
        }

        .site-content main {
            width: calc(100% - 200px);
            height: 400px;
            background-color: #0dcaf0;
        }
    </style>
</head>
<body>

<div class="site-wrap">
    <?php include "partials/header.php"; ?>
    <?php include "partials/nav.php"; ?>

    <div class="site-content">
        <?php include "partials/sidebar.php"; ?>

        <?php include "partials/main.php"; ?>

    </div>

    <?php include "partials/footer.php"; ?>
</div>

</body>
</html>