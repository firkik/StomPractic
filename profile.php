<?php
session_start();
include "cookie.php";
if (!$_SESSION['user']) {
    header('Location: /login.php');
}
if ($_COOKIE['user'] != 'да') {
        unset($_SESSION['user']);
}
?>

<!DOCTYPE html>
<html lang="ru">

<!-- Подключение стилей (системная строка) -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/favicon.png">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <title>Частная клиника</title>
</head>

<body>
    <!-- Шапка (header) сайта. Файл: header.php -->
    <?php include 'header.php' ?>

    <!-- Профиль -->
    <div class="section__profile">
        <h1>Профиль</h1>
        <a href="logout.php" class="logout">Выйти</a>
    </div>

    <!-- Подвал сайта (footer). Файл - footer.php -->
    <?php include 'footer.php' ?>
</body>

</html>