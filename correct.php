<<<<<<< HEAD
<?php
session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $time_to = $_POST['time_to'];
    $time_from = $_POST['time_from'];
    $date_to = date_format(date_create($_POST['date_to']), 'Y-m-d');
    $date_from = date_format(date_create($_POST['date_from']), 'Y-m-d');
    $time_travel = $_POST['time_travel'];
    $price = $_POST['price'];

    $cor = mysqli_query($link, "UPDATE `flight_t` SET `to_city` = '$to_city', `from_city` = '$from_city', `time_to` = '$time_to', `time_from` = '$time_from', `time_travel` = '$time_travel', `price` = '$price' WHERE `flight_t`.`id_flight_t` = '$id'");
    mysqli_query($link, "UPDATE `timetable` SET `date_to` = '$date_to', `date_from` = '$date_from' WHERE `timetable`.`id_flight_t` = '$id'");

      header('Location: index.php?page=admin');
=======
<?php
session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $time_to = $_POST['time_to'];
    $time_from = $_POST['time_from'];
    $date_to = date_format(date_create($_POST['date_to']), 'Y-m-d');
    $date_from = date_format(date_create($_POST['date_from']), 'Y-m-d');
    $time_travel = $_POST['time_travel'];
    $price = $_POST['price'];

    $cor = mysqli_query($link, "UPDATE `flight_t` SET `to_city` = '$to_city', `from_city` = '$from_city', `time_to` = '$time_to', `time_from` = '$time_from', `time_travel` = '$time_travel', `price` = '$price' WHERE `flight_t`.`id_flight_t` = '$id'");
    mysqli_query($link, "UPDATE `timetable` SET `date_to` = '$date_to', `date_from` = '$date_from' WHERE `timetable`.`id_flight_t` = '$id'");

      header('Location: index.php?page=admin');
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
 ?>