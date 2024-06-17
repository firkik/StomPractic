<?php
session_start();
if ($_SESSION['user']) {
    header('Location: /profile.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<!-- Подключение стилей (системная строка) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/favicon.png">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Частная клиника</title>
</head>
<body>
    <!-- Шапка (header) сайта. Файл: header.php -->
    <?php include 'header.php'?>

    <!-- Окно входа в профиль -->
    <section class="section__modal">
        <h1>Войти</h1>
        <!-- Форма входа в аккаунт (сразу сделано с ошибками) -->
        <form action="login_db.php" method="post" enctype="multipart/form-data">
            <?php if ($_SESSION['login_error'] == 'login'): ?>
            <input type="text" placeholder="Логин" class="login input-error" name="login">
            <p class="error" style="margin-bottom: 8px; margin-left: 10px">Обязательное поле для заполнения</p>
            <?php unset($_SESSION['login_error'])?>
            <?php else:?>
            <input type="text" placeholder="Логин" class="login" name="login" style="margin-bottom: 30px;">
            <?php endif; ?>
            <?php if ($_SESSION['login_error'] == 'password'):?>
            <input type="password" placeholder="Пароль" class="password input-error" name="password">
            <p class="error" style="margin-bottom: 8px; margin-left: 10px">Обязательное поле для заполнения</p>
            <?php unset($_SESSION['login_error'])?>
            <?php else:?>
            <input type="password" placeholder="Пароль" class="password" name="password">
            <?php endif; ?>
            <button class="submit">Войти</button>
        </form>
        <div class="link__reg">
            <h3>Ещё нет аккаунта?</h3>
            <a href="reg.php">Зарегистрироваться</a>
        </div>
    </section>
    <?php if ($_SESSION['login_error'] == 'error'): ?>
    <div class="error-modal">
        <p>Ошибка при входе</p>
    </div>
    <?php endif;?>
    <!-- Подвал сайта (footer). Файл - footer.php -->
    <?php include 'footer.php'?>
    <?php unset($_SESSION['login_error']);?>
</body>
</html>