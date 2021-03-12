<?php
    include_once __DIR__ . "/../header.php";
?>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Контакты</a>
        <a href="/?model=contacts&action=read" class="btn btn-primary">Список Контактов</a>
    </nav>
<form class="form-horizontal w-50 mt-5 container" action="/?model=contacts&action=save" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <input type="hidden" value="<?=$one['id'] ?? ''?>" name="id">

        <div class="form-group">
            <label>Имя</label>
                <input type="text" value="<?=$one['name'] ?? ''?>" name="name" class="form-control" required  autocomplete="off" placeholder="Введите Ваше Имя">
        </div>

        <div class="form-group">
            <label>Номер телефона</label>
                <input type="number" value="<?=$one['mobile_number'] ?? ''?>" name="mobile_number"  class="form-control" required  autocomplete="off" placeholder="Введите Ваш номер телефона">
        </div>

        <div class="form-group">
            <label>Домашний Номер</label>
                <input type="number"  value="<?=$one['home_number'] ?? ''?>" name="home_number"  class="form-control"  autocomplete="off" placeholder="По желанию">
        </div>

        <div class="form-group">
            <label>Адрес электронной почты</label>
                <input type="email"  value="<?=$one['email'] ?? ''?>" name="email"  class="form-control" required  autocomplete="off" placeholder="Введите адрес электронной почты">
        </div>

        <div class="form-group">
            <label>Резервный электронный адрес</label>
                <input type="email"  value="<?=$one['reserve_email'] ?? ''?>" name="reserve_email"  class="form-control" autocomplete="off" placeholder="По желанию">
        </div>

        <div>
            <input type="submit" class="btn btn-info btn-save" value="Сохранить">
        </div>
    </div>
</form>
<?php
    include_once __DIR__ . "/../footer.php";
?>