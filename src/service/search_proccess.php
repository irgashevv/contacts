<?php
//$connection = mysqli_connect(
//    "localhost",
//    'root',
//    'root',
//    'mytask') or die("Could not Connect");
//$output = '';
//
//if (isset($_POST['search'])) {
//    $searchQ = $_POST['search'];
//
//    $query = mysqli_query($connection, "SELECT * FROM contacts WHERE
//                `name` LIKE '%$searchQ%' or
//                `mobile_number` LIKE '%$searchQ%' or
//                `home_number` LIKE '%$searchQ%' or
//                `email` LIKE '%$searchQ%' or
//                `reserve_email` LIKE '%$searchQ%'") or die("Could not search");
//    $count = mysqli_num_rows($query);
//    if ($count == 0) {
//        $output = 'Контакт не найден';
//    } else {
//        while ($row = mysqli_fetch_row($query)){
//            $fName = $row['1'];
//            $numberR = $row['2'];
//            $id = $row['0'];
//            $output = 'По вашему запросу найден контакт ' . $fName . ' с мобильным номером' . $numberR;
//        }
//    }
//}
//include_once __DIR__ . "/../../views/header.php";
//
//print ("$output");
//
//include_once __DIR__ . "/../../views/footer.php";
