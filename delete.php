<<<<<<< HEAD
<?php
session_start();
require_once('connect.php');
    $id = $_SESSION['id_del'];
    mysqli_query($link, "DELETE FROM `tickets` WHERE `tickets`.`id` = '$id'");

header('Location: index.php?page=profile');
=======
<?php
session_start();
require_once('connect.php');
    $id = $_SESSION['id_del'];
    mysqli_query($link, "DELETE FROM `tickets` WHERE `tickets`.`id` = '$id'");

header('Location: index.php?page=profile');
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
 ?>