<?php
    include_once __DIR__ . "/../header.php";
?>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Контакты</a>
    <a href="/?model=contacts&action=create" class="btn btn-primary">Добавить контакт</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
</nav>
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
    <?php foreach ($all as $d) : ?>
        <tr>
            <td><?=$d['name']?></td>
            <td><?=$d['mobile_number']?></td>
            <td><?=$d['home_number']?></td>
            <td><?=$d['email']?></td>
            <td><?=$d['reserve_email']?></td>
            <td>
                <a href="/?model=contacts&action=update&id=<?=$d['id']?>" class="btn btn-primary">
                    Редактировать
                </a>
                <a href="/?model=contacts&action=delete&id=<?=$d['id']?>" class="btn btn-danger">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
    include_once __DIR__ . "/../footer.php";
?>