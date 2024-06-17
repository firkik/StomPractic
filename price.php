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
    <title>Частная клиника</title>
</head>
<body>
    <!-- Шапка (header) сайта. Файл: header.php -->
    <?php include 'header.php' ?>

    <!-- Блок с ценами -->
    <section class="section__price">
        <h1>Цена услуг</h1>
        <table>
            <thead>
                <tr>
                    <td>Услуга</td>
                    <td>Цена</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Анализы крови</td>
                    <td>От 500 рублей</td>
                </tr>
                <tr>
                    <td>УЗИ</td>
                    <td>От 1000 рублей</td>
                </tr>
                <tr>
                    <td>Рентгенография</td>
                    <td>От 1000 рублей</td>
                </tr>
                <tr>
                    <td>Лечение зубов</td>
                    <td>От 5000 рублей</td>
                </tr>
                <tr>
                    <td>Госпитализация</td>
                    <td>От 10000 рублей</td>
                </tr>
                <tr>
                    <td>Оперативное вмешательство</td>
                    <td>От 30000 рублей</td>
                </tr>
                <tr>
                    <td>Косметология</td>
                    <td>От 5000 рублей</td>
                </tr>
                <tr>
                    <td>Диетология</td>
                    <td>От 3000 рублей</td>
                </tr>
                <tr>
                    <td style='border: none'>Лабораторные исследования</td>
                    <td style='border: none'>от 1000 рублей</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Подвал сайта (footer). Файл - footer.php -->
    <?php include 'footer.php' ?>
</body>
</html>