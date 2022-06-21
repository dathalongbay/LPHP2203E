<?php
session_start();

// kiêm tra xem session admin tồn tại hay chưa
if (isset($_SESSION['admin'])) {
    // chuyển hướng
    header("Location: index.php");
    exit();
}

echo "<pre>";
print_r($_POST);
echo "</pre>";
$users = [
    ["username" => "admin@gmail.com", "password" => md5("123456")],
    ["username" => "tuananh@gmail.com", "password" => md5("abc123")],
    ["username" => "linhchi@gmail.com", "password" => md5("cab888")],
];
if (isset($_POST['username']) && isset($_POST['mat_khau'])) {
    if (strlen($_POST['username']) > 5 && strlen($_POST['mat_khau']) >= 6) {
        $userName = $_POST['username'];
        $userPassword = md5($_POST['mat_khau']);
        if (is_array($users) && !empty($userPassword)) {
            foreach ($users as $user) {
                if ($user['username'] == $userName) {
                    if ($user['password'] == $userPassword) {
                        $_SESSION['admin'] = ['username' => $userName];
                        // chuyển hướng
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "Mật khẩu không đúng";
                        die();
                    }
                }
            }
        }

        echo "Username hay mật khẩu không hợp lệ";
        die();
    } else {
        echo "Username hay mật khẩu không hợp lệ";
        die();
    }
} else {
    echo "Đăng nhập không hợp lệ";
    die();
}

