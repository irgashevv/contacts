<?php
    include_once __DIR__ . "/../header.php";
    $connection = mysqli_connect(
            "localhost",
            'root',
            'root',
            'mytask') or die("Could not Connect");
    $output = '';

    if (isset($_POST['search'])) {
        $searchQ = $_POST['search'];
        $searchQ = preg_replace("#[^0-9a-z]#i","",$searchQ);

//        $query = mysqli_query($connection,"SELECT * FROM `contacts` WHERE
//            `name` LIKE '%$searchQ%' or `mobile_number` LIKE '%$searchQ%'") or die("Could not search");
        $query = mysqli_query($connection, "SELECT * FROM contacts WHERE name LIKE '%$searchQ%' or 
                `mobile_number` LIKE '%$searchQ%'") or die("Could not search");

        $count = mysqli_num_rows($query);
        if ($count == 0) {
            $output = 'Такого контакта не существует в списке';
        } else {
            while ($row = mysqli_fetch_row($query)){
                $fName = $row['1'];
                $numberR = $row['2'];
                $id = $row['0'];
                $output .= '<div> '.$fName.' '.$numberR.'</div>';
            }

        }
    }
?>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Контакты</a>
    <a href="/?model=contacts&action=create" class="btn btn-primary">Добавить контакт</a>

    <form method="post" class="form-inline">
<!--        <label>Search</label>-->
        <input type="text" name="search" placeholder="Поиск Контактов" class="form-control">
        <input type="submit" value="Искать" class="btn btn-secondary ml-3">
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
    print ("$output");
?>
<?php
    include_once __DIR__ . "/../footer.php";
?>