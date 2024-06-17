<?php
session_start();

$connect = mysqli_connect('92.53.99.174', 'admins', 'AsAvAg72$@', 'users_bd');


if (!$connect) {
    $_SESSION['login_error'] = 'error';
    header('Location: /login.php');
    exit();
}

$login = $_POST['login'];
$password = $_POST['password'];

if ($login == '') {
    $_SESSION['login_error'] = 'login';
    header('Location: /login.php');
    exit();
} elseif ($password == '') {
    $_SESSION['login_error'] = 'password';
    header('Location: /login.php');
    exit();
}

$check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");

if (mysqli_num_rows($check_user) == 1) {
    $user = $check_user->fetch_assoc();
    $_SESSION['user'] = [
     'name' => $user['login'],
     'phone' => $user['phone'],
    ];
    
    header('Location: /profile.php');
 } else {
     $_SESSION['login_error'] = 'error';
    header('Location: /login.php');
 }
?>