<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Подключение стилей (системная строка) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/favicon.png">
    <link rel="stylesheet" href="css/index.css">
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
    <?php include 'header.php'?>

    <!-- Краткий блок о нас (about). Полный файл: about.php -->
    <section class="section__about">
        <div class="about__img"><img src="img/about.png" alt="photo"></div>
        <div class="about__text">
            <h1>Частная клиника "Алое поле"</h1>
            <p>Частная клиника "Алое поле" помогает людям и делает им прекрасную улыбку.<br/><br/>Вы уйдёте домой счастливыми и с прекрасной улыбкой!Мы делаем людей счастливыми и добрыми!<br/><br/>Наша фирма существует более 5 лет.</p>
            <a href="about.php">Узнать больше...</a>
        </div>
    </section>

    <!-- Информация о врачах (info) -->
    <section class="section__info">
        <div class="title">
            <h2>Информация о врачах</h2>
            <p>В нашей больнице около 10 классифицированных врачей.<br/>Опыт работы всех наших врачей более 7 лет!</p>
        </div>
        <div class="doctor__container">
            <div class="doctor">
                <img src="img/doctor/doctor1.png" alt="photo">
                <h2>Екатерина Валентиновна</h2>
                <p>Ведущий хирург-стоматолог<br/>Опыт работы - 13 лет</p>
            </div>
            <div class="doctor">
                <img src="img/doctor/doctor2.png" alt="photo">
                <h2>Игорь Степанович</h2>
                <p>Врач-ортодонт<br/>Опыт работы - 9 лет</p>
            </div>
            <div class="doctor">
                <img src="img/doctor/doctor3.png" alt="photo">
                <h2>Валентин Николаевич</h2>
                <p>Врач-стоматолог<br/>Опыт работы - 25 лет</p>
            </div>
        </div>
    </section>

    <!-- Контакты (форма), запись на приём. Отправка данных на email (нужен хостинг). Полный файл - contact.php -->

    <section class="section__contact">
        <div class="contact__img"><img src="img/contact.png" alt="photo"></div>
        <div class="contact__text">
            <h2>Запись на приём</h2>
            <p>Оставьте ваши данные и мы вам перезвоним!</p>
            <form action="mail_db.php" method="post">
                <input type="text" placeholder="Имя" class="name" name="name">
                <input type="text" placeholder="Телефон" class="phone" name="phone">
                <input type="text" placeholder="Электронная почта" class="email" name="email">
                <button class="submit">Отправить</button>
            </form>
        </div>
    </section>

    <!-- Подвал сайта (footer). Файл - footer.php -->
    <?php include 'footer.php'?>
</body>

</html>