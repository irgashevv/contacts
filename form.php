<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Контакты</title>
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Контакты</a>
        <a href="index.php" class="btn btn-primary ">Список Контактов</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </nav>
</header>
<main class="d-flex justify-content-center">
    <form action="#" class="mt-5">

        <div class="form-group">
            <label for="">Имя*</label>
            <input type="text"  class="form-control" name="name" placeholder="Введите имя" autocomplete="off">
        </div>

        <div>
            <div class="form-group">
                <label>Номер телефона*</label>
                <input type="text"  class="form-control pr-5 phone-position" name="name" placeholder="Введите номер телефона" autocomplete="off">
                <button type="submit" class="btn-hidden btn-info">+</button>
            </div>
            <div class="form-group hidden">
                <label for="">Домашний телефон</label>
                <input type="text"  class="form-control pr-5" name="name" placeholder="Введите домашний номер" autocomplete="off">
            </div>
        </div>

        <input type="checkbox" class="toggle"></input>

        <div class="toggled">
            Text that be hidden dynamically!
        </div>

        <div class="form-group">
            <label for="">Электронная почта*</label>
            <input type="text"  class="form-control pr-5" name="name" placeholder="Введите электронную почту" autocomplete="off">
        </div>
        <a href="#" class="email-btn-hidden">-</a>

        <div class="form-group email-hidden">
            <label>Резервный адрес почты</label>
            <input type="text"  class="form-control pr-5" name="name" placeholder="Введите резервный адрес почты" autocomplete="off">
        </div>

        <div class="form-group">
            <button type="submit" name="save" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
    <script src="js/app.js"></script>
</main>
</body>
</html>