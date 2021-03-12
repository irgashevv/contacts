<?php
    include_once __DIR__ . "/../header.php";
?>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Контакты</a>
        <a href="/?model=contacts&action=read" class="btn btn-primary">Список Контактов</a>
    </nav>
<form class="form-horizontal" action="http://contacts/?model=contacts&action=save" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <input type="hidden" value="<?=$one['id'] ?? ''?>" name="id">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Имя</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$one['name'] ?? ''?>" name="name" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Номер телефона</label>
            <div class="col-sm-10">
                <input type="text" value="<?=$one['mobile_number'] ?? ''?>" name="mobile_number"  class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Домашний Номер</label>
            <div class="col-sm-10">
                <input type="text"  value="<?=$one['home_number'] ?? ''?>" name="home_number"  class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text"  value="<?=$one['email'] ?? ''?>" name="email"  class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Reserve Email</label>
            <div class="col-sm-10">
                <input type="text"  value="<?=$one['reserve_email'] ?? ''?>" name="reserve_email"  class="form-control">
            </div>
        </div>

        <div>
            <input type="submit" class="btn btn-dark" value="Сохранить">
        </div>
    </div>
</form>

<?php
    include_once __DIR__ . "/../footer.php";
?>