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

        $query = mysqli_query($connection, "SELECT * FROM contacts WHERE 
                `name` LIKE '%$searchQ%' or 
                `mobile_number` LIKE '%$searchQ%' or 
                `home_number` LIKE '%$searchQ%' or 
                `email` LIKE '%$searchQ%' or 
                `reserve_email` LIKE '%$searchQ%'") or die("Could not search");

        $count = mysqli_num_rows($query);
        if ($count == 0) {
            $output = 'There was no search results';
        } else {
            while ($row = mysqli_fetch_row($query)){
                $fName = $row['1'];
                $numberR = $row['2'];
                $id = $row['0'];
                $output .= '<div> '  .$fName.' '.$numberR.'</div>';

            }
        }
    }
?>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Контакты</a>
    <a href="/?model=contacts&action=create" class="btn btn-primary">Добавить контакт</a>
</nav>
<?php
    print ("$output");
?>
<div class="container">

    <?php include_once "search.php";?>

<table class="table table-striped mt-4">
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
                <a href="/?model=contacts&action=update&id=<?=$d['id']?>" class="btn btn-primary btn-sm">
                    Редактировать
                </a>
                <a href="/?model=contacts&action=delete&id=<?=$d['id']?>" class="btn btn-danger btn-sm">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    <nav aria-label="..." class="float-right ">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<?php
    include_once __DIR__ . "/../footer.php";
?>