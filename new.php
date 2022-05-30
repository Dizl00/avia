<<<<<<< HEAD
<?php
session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $id_plane = $_POST['id_plane']; 
    $to_country = $_POST['to_country'];
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $time_to = $_POST['time_to'];
    $time_from = $_POST['time_from'];
    $kod_from = $_POST['kod_from'];
    $kod_to = $_POST['kod_to'];
    $date_to = date_format(date_create($_POST['date_to']), 'Y-m-d');
    $date_from = date_format(date_create($_POST['date_from']), 'Y-m-d');
    $time_travel = $_POST['time_travel'];
    $imges = $_FILES['img'];
    $price = $_POST['price'];

/*$test = "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `img `,`imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
      NULL, NULL, '$price',)";
    var_dump($test);*/

mysqli_query($link, "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
       '$imges', '$price')");

    /*mysqli_query($link, "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `img `,`imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
      NULL, NULL, '$price')");*/
   /* mysqli_query($link, "INSERT INTO `timetable` (`id_timetable`,`id_flight_t`,`date_to`, `date_from`,) VALUES (NULL, '$id','$date_to', '$date_from')");*/

      header('Location: index.php?page=admin');
 ?>

=======
<?php
session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $id_plane = $_POST['id_plane']; 
    $to_country = $_POST['to_country'];
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $time_to = $_POST['time_to'];
    $time_from = $_POST['time_from'];
    $kod_from = $_POST['kod_from'];
    $kod_to = $_POST['kod_to'];
    $date_to = date_format(date_create($_POST['date_to']), 'Y-m-d');
    $date_from = date_format(date_create($_POST['date_from']), 'Y-m-d');
    $time_travel = $_POST['time_travel'];
    $imges = $_FILES['img'];
    $price = $_POST['price'];

/*$test = "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `img `,`imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
      NULL, NULL, '$price',)";
    var_dump($test);*/

mysqli_query($link, "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
       '$imges', '$price')");

    /*mysqli_query($link, "INSERT INTO `flight_t` (
      `id_flight_t`, `id_plane`,
      `from_city`, `to_city`, `to_country`, 
      `time_to`, `time_from`, `time_travel`,  
      `kod_from`,`kod_to`,
      `img `,`imges`,`price`) 
    VALUES (
      NULL, '$id_plane', 
      '$from_city', '$to_city', '$to_country',
      '$time_to', '$time_from', '$time_travel', 
      '$kod_from', '$kod_to',
      NULL, NULL, '$price')");*/
   /* mysqli_query($link, "INSERT INTO `timetable` (`id_timetable`,`id_flight_t`,`date_to`, `date_from`,) VALUES (NULL, '$id','$date_to', '$date_from')");*/

      header('Location: index.php?page=admin');
 ?>

>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
