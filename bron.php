<?php 
session_start();
require_once 'connect.php';
$add_tickets =  $_SESSION['add_tickets'];
$id_user = (int)$_SESSION['user']['id'];
  
if(isset($_SESSION['user'])){

	foreach($add_tickets as $key => $value){
			$id_product = $key;
			$number_product = (int)$value;

            mysqli_query($link, "INSERT INTO `tickets` (`id`, `id_user`, `id_product`, `number_product`) VALUES (NULL, '$id_user', '$id_product', '$number_product')");
			}

       			       
        		header('Location: index.php?page=profile');

        
    		}else {
        	$_SESSION['message'] = 'Для оформления заказа авторизуйтесь!';
			header("Location: index.php?page=auther");
        	
        } 
			
       			
?> 