<?php
session_start();

$connect = mysqli_connect("92.53.99.174", "admins", "AsAvAg72$@", "users_bd");
$_SESSION['reg_error'] = '';

$login = $_POST['login'];
$phone = $_POST['phone'];
$password = $_POST['password'];


if (!$connect) {
    $_SESSION['reg_error'] = 'error';
    header('Location: /reg.php');
    exit();
}


if ($login == '') {
    $_SESSION['reg_error'] = 'login';
    header('Location: /reg.php');
    exit();
} elseif ($password == '') {
    $_SESSION['reg_error'] = 'password';
    header('Location: /reg.php');
    exit();
} elseif ($phone == '') {
    $_SESSION['reg_error'] = 'phone';
    header('Location: /reg.php');
    exit();
}

if (!mysqli_query($connect, "INSERT INTO users VALUES ('', '$login', '$phone', '$password')")) {
    $_SESSION['reg_error'] = 'error';
} else {
    header('Location: /');
}
?>