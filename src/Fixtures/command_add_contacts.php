<?php

include_once  "add_contacts_fixture.php";

$conn = mysqli_connect('localhost', 'root', 'root', 'mytask');

$fixture = new add_contacts_fixture($conn);
$fixture->run();
die('ok');