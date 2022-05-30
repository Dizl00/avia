<?php 
session_start();

// foreach ($_POST as $key => $value) {
//    echo 'ряд'.$key.'место'.$value;
// }
//$key - ряд $value - место
//var_dump($_SESSION['user']);
/*if ($_SESSION['user']<= 0) {
    $_SESSION['message'] = "Пожалуйста зарегестрируйтесь";
    header('index.php?page=register');
    }
if ($_SESSION['user']==NULL) {
    $_SESSION['message'] = "Пожалуйста зарегестрируйтесь";
    header('index.php?page=register');
    }*/
    //var_dump($_SESSION['id_flight']);
    /*$id = $_SESSION['id_flight'];
    $_SESSION['id_flight'] = $id;*/
    if(isset($_SESSION['bron'])){
    	unset($_SESSION['bron']);
    }
foreach ($_POST as $key => $value){
$places=array(
	'row' =>$key ,
	 'place'=>$value);}

$_SESSION['bron'][]=$places;

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
?>
<!-- выбираем места для бронирования -->