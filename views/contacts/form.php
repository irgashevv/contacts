<?php
    include_once __DIR__ . "/../header.php";

    $url = $_SERVER['REQUEST_URI'];
    if($url == '/?model=contacts&action=create')
        $city = 'Добавить новый контакт';
    else {
        $city = 'Изменить данные контакта';
    }
?>

    <div class="form-div">
            <h1 class="display-4 text-center mt-5"> <?= $city ?> </h1>
        <form class="form-horizontal w-50 container border border-info rounded" action="/?model=contacts&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <input type="hidden" value="<?=$one['id'] ?? ''?>" name="id">

                <div class="form-group">
                    <label>Имя</label>
                        <input type="text" value="<?=$one['name'] ?? ''?>" name="name" class="form-control" required  autocomplete="off" placeholder="Введите Ваше Имя" maxlength="30" minlength="4">
                </div>

                <div class="form-group">
                    <label>Номер телефона</label>
                        <input type="number"  value="<?=$one['mobile_number'] ?? ''?>" name="mobile_number"  class="form-control" required  autocomplete="off" placeholder="Введите Ваш номер телефона">
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
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </form>
    </div>

<?php
    include_once __DIR__ . "/../footer.php";
?>