<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/style.css">
<?php
    $url = $_SERVER['REQUEST_URI'];
    if($url == '/?model=contacts&action=read')
    $city = '<a href="/?model=contacts&action=create" class="btn btn-primary">Добавить контакт</a>';
    else {
    $city = '<a href="/?model=contacts&action=read" class="btn btn-primary">Список Контактов</a>';
    }
?>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Контакты</a>
        <a href="/?model=contacts&action=create" class="btn btn-primary">Добавить контакт</a>
    </nav>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Контакты</a>
        <a href="/?model=contacts&action=read" class="btn btn-primary">Список Контактов</a>
    </nav>
</head>
<body>
