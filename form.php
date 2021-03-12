<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>
    <header>
        <a href="index.php">Список Контактов</a>
    </header>
    <?php include_once "process.php"?>
    <form action="process.php" class="main_form" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="name__input">
            <label for="">Name</label>
            <input type="text" name="name" value="" autocomplete="off" tabindex="1">
        </div>

            <label for="">Phone number</label>

        <div class="phone-number">
                <input type="text" value="<?php echo $mobileNumber;?>" name="mobile_number" tabindex="2">
                <input type="checkbox" class="toggle" id="ida">
            <div class="toggled">
                <label for="">Home number</label>
                <input type="text" value="<?php echo $homeNumber;?>" name="home_number">
            </div>
        </div>
            <label for="">Email</label>

        <div class="checkbox-btn">
                <input type="text" name="email" value="<?php echo $email;?>" tabindex="3">
                <input type="checkbox" class="toggled" id="ida">

            <div class="toggled">
                <label for="">Second Email</label>
                <input type="text" name="reserve_email" value="<?php echo $reserveEmail?>">
            </div>
        </div>

        <div>
            <button type="submit" name="save" class="btn-save" tabindex="4">Save</button>
        </div>
    </form>
</body>
</html>