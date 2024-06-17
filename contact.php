<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/favicon.png">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Частная клиника</title>
</head>
<body>
    <!-- Шапка (header) сайта. Файл: header.php -->
    <?php include 'header.php' ?>

    <!-- Блок с контактами -->
    <section class="section__contact">
        <h1>Контакты</h1>
        <div class="contact__container">
            <div class="contact">
                <img src="img/contact/house.png" alt="icon">
                <p>150040, Г. ЯРОСЛАВЛЬ<br/>ул. Некрасова, 37а</p>
            </div>
            <hr>
            <div class="contact">
                <img src="img/contact/phone.png" alt="icon">
                <p>+7 (919) 835-63-19</p>
            </div>
            <hr>
            <div class="contact">
                <img src="img/contact/email.png" alt="icon">
                <p>clients@ch-clinic.ru</p>
            </div>
        </div>
    </section>

    <!-- Подвал сайта (footer). Файл - footer.php -->
    <?php include 'footer.php' ?>
</body>
</html>