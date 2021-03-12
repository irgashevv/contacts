<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'mytask') or die(mysqli_error($mysqli));

$id = 0;
$name = '';
$mobileNumber = '';
$homeNumber = '';
$email = '';
$reserveEmail = '';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $mobileNumber = $_POST['mobile_number'];
    $homeNumber = $_POST['home_number'];
    $email = $_POST['email'];
    $reserveEmail = $_POST['reserve_email'];

    $mysqli->query("INSERT INTO contacts (
            `name`, 
            `mobile_number`,
            `home_number`,
            `email`,
            `reserve_email`) VALUES (
            '$name',
            '$mobileNumber',
            '$homeNumber',
            '$email',
            '$reserveEmail')") or die($mysqli->error);
    header("location: index.php");
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE from `contacts` where id = $id") or die($mysqli->error);
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result =$mysqli->query("SELECT * from `contacts` WHERE id = $id") or die($mysqli->error);

        $data = $result->fetch_array();
        $name = $data['name'];
        $mobileNumber = $data['mobile_number'];
        $homeNumber = $data['home_number'];
        $email = $data['email'];
        $reserveEmail = $data['reserve_email'];

        header("location: form.php?id=$id");
}