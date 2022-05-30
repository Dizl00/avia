<<<<<<< HEAD
<?php
session_start();

//Передача данных из формы: id ($id_add)выбранного товара и количество товара //($kol_add) 
 
$id_add = $_POST['tickets_id'];
//var_dump($id_add);
$kol_add = 1;

if(!isset($_SESSION['add_tickets'][$id_add])){
        $_SESSION['add_tickets'][$id_add]= $kol_add;
   }else{
        $_SESSION['add_tickets'][$id_add] += $kol_add;
        }


 // var_dump($_SESSION['add_tickets'][$id_add]);
//позволяет вернуться на ту же страницу, с которой пришли, т.е. на opendProduct
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

=======
<?php
session_start();

//Передача данных из формы: id ($id_add)выбранного товара и количество товара //($kol_add) 
 
$id_add = $_POST['tickets_id'];
//var_dump($id_add);
$kol_add = 1;

if(!isset($_SESSION['add_tickets'][$id_add])){
        $_SESSION['add_tickets'][$id_add]= $kol_add;
   }else{
        $_SESSION['add_tickets'][$id_add] += $kol_add;
        }


 // var_dump($_SESSION['add_tickets'][$id_add]);
//позволяет вернуться на ту же страницу, с которой пришли, т.е. на opendProduct
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
 ?>