<?php include_once "src/Service/Router.php";

$router = new Router();
$router->index();
?>

<!--<!doctype html>-->
<!--<html lang="ru">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
<!--    <title>Контакты</title>-->
<!--</head>-->
<!--<body>-->
<!--    <header>-->
<!--        <nav class="navbar navbar-light bg-light justify-content-between">-->
<!--            <a class="navbar-brand">Контакты</a>-->
<!--            <a href="form.php" class="btn btn-primary">Добавить контакт</a>-->
<!--            <form class="form-inline">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>-->
<!--            </form>-->
<!--        </nav>-->
<!--    </header>-->
<!--    <main>-->
<!--        --><?php //include "process.php";?>
<!--        --><?php
//
//        $mysqli = new mysqli('localhost', 'root', 'root', 'mytask') or die(mysqli_error($mysqli));
//        $result = $mysqli->query("SELECT * FROM `contacts`") or die($mysqli->error);
//        $allData = mysqli_fetch_all($result, MYSQLI_ASSOC);
//        ?>
<!--        <table class="table table-striped">-->
<!--            <thead class="thead-dark">-->
<!--                <tr>-->
<!--                    <th>Имя</th>-->
<!--                    <th>Мобильный Номер</th>-->
<!--                    <th>Домашний Номер</th>-->
<!--                    <th>Электронная почта</th>-->
<!--                    <th>Резервная почта</th>-->
<!--                    <th>Действие</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($allData as $data) : ?>
<!--            <tr>-->
<!--                <td>--><?//=$data['name']?><!--</td>-->
<!--                <td>--><?//=$data['mobile_number']?><!--</td>-->
<!--                <td>--><?//=$data['home_number']?><!--</td>-->
<!--                <td>--><?//=$data['email']?><!--</td>-->
<!--                <td>--><?//=$data['reserve_email']?><!--</td>-->
<!--                <td>-->
<!--                    <a href="?edit=--><?//=$data['id']?><!--" class="btn btn-primary">-->
<!--                        Редактировать-->
<!--                    </a>-->
<!--                    <a href="?delete=--><?//=$data['id']?><!--" class="btn btn-danger">Удалить</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--    </main>-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<!--</body>-->
<!--</html>-->