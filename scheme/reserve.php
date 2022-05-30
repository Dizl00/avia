<?php 
session_start();
require_once '../connect.php';

$id_user = (int)$_SESSION['user']['id'];
$id_flight = (int)$_SESSION['id_flight'];
$id_timetable = (int)$_SESSION['id_timetable'];

    if ($id_user == 0) {
    $_SESSION['message'] = "Пожалуйста авторизируйтесь";
    header("Location: ../index.php?page=register");
    }else{

$sql_tickets=$link->query("SELECT * FROM `tickets`" );
        $idc = $id_flight;
        $goodc = [];
        foreach ($sql_tickets as $ticket) {
            if($_SESSION['bron']['0']['place'] == $ticket['num_place'] AND $_SESSION['bron']['0']['row'] == $ticket['num_row'] AND $id_flight == $ticket['id_flight'] AND $id_timetable == $ticket['id_timetable']) {
                header("Location: ../index.php?page=scheme");
                unset($_SESSION['bron']);
                break;

            }
        }



// добавить в БД выбранный билет

foreach ($_SESSION['bron'] as $ticket) {
        $row = $ticket['row'];//ряд
        $place = $ticket['place'];//место


        mysqli_query($link, "INSERT INTO `tickets` (
                `id`, `id_timetable`, `id_user`, `id_flight_t`,
                `num_row`, `num_place`,
                `date_added`, `status`,`tarif`) 
        VALUES (
                NULL, '$id_timetable', '$id_user',  '$id_flight',
                '$row', '$place',
                CURRENT_TIMESTAMP, '1', NULL )"); 
         
    }

unset($_SESSION['bron']);

header("Location: ../index.php?page=profile");
	}
    /* } */  
?> 