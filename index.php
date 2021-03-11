<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Контакты</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Контакты</a>
            <a href="form.php" class="btn btn-primary">Добавить контакт</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </nav>
    </header>
    <main>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Имя</th>
                    <th>Мобильный Номер</th>
                    <th>Домашний Номер</th>
                    <th>Электронная почта</th>
                    <th>Резервная почта</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>Иброхим</td>
                <td>+992935622211</td>
                <td></td>
                <td>irgashev1200@gmail.com</td>
                <td></td>
                <td>
                    <a href="" class="btn btn-info">Редактировать</a>
                    <a href="" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            </tbody>
        </table>
    </main>
</body>
</html>