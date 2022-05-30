<?php
session_start();
require_once '../connect.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    //проверяем есть ли пользователь в БД с таким логином
    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' ");
    //mysqli_num_rows() - возвращает число рядов в результирующей выборке
  
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'Такой логин уже используется';
        header('Location: ../index.php?page=register');

    }else{

    if ($password === $password_confirm) {

        $path = 'images/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: index.php?page=register');
        }

        $password = md5($password);

        mysqli_query($link, "INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$first_name', '$last_name', '$login', '$email', '$password', NULL)");

        
        $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    //mysqli_num_rows() - возвращает число рядов в результирующей выборке
    if (mysqli_num_rows($check_user) > 0) {
    //mysqli_fetch_assoc - Обрабатывает ряд результата запроса и возвращает ассоциативный массив
        $user = mysqli_fetch_assoc($check_user);
    //при успешной авторизации запоминается данные об этом пользователи в сессию 'user'
        $_SESSION['user'] = [
            "id" => $user['id'],
            "first_name" => $user['first_name'],
            "last_name" => $user['last_name'],
            "avatar" => $user['avatar'],
            "login" => $user['login'],
            "email" => $user['email'],
            "Phone" => $user['Phone'],
            "Birthday" => $user['Birthday'],
            "Citizenship_pass" => $user['Citizenship_pass'],
            "Country_pass" => $user['Country_pass'],
            "role" => $user['role']
        ];}
        unset($_SESSION['message']);
        header('Location: ../index.php?page=profile');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: index.php?page=register');
    }
}
?>
