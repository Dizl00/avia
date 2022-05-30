<<<<<<< HEAD
<?php
session_start();
    require_once 'connect.php';

    $login = $_SESSION['user']['login'];
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $family_name = $_POST['family_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $birthday = $_POST['birthday'];
    $citizenship = $_POST['citizenship'];
    $country = $_POST['country'];
    $ser_num = $_POST['ser_num'];
    
 $date = date_format(date_create($birthday), 'Y-m-d');

    $_SESSION['user']['first_name'] = $first_name;
    $_SESSION['user']['last_name'] = $last_name;
    $_SESSION['user']['family_name'] = $family_name;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['Phone'] = $number;
    $_SESSION['user']['Birthday'] = $birthday;
    $_SESSION['user']['Citizenship_pass'] = $citizenship;
    $_SESSION['user']['Country_pass'] = $country;
    $_SESSION['user']['Ser_num_pass'] = $ser_num;

    $edit=mysqli_query($link, "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name',`family_name` = '$family_name', `email` = '$email', `Phone` = '$number',
     `Birthday` = '$date', `Citizenship_pass` = '$citizenship', `Country_pass` = '$country',`Ser_num_pass` = '$ser_num'
      WHERE `users`.`login` = '$login'");



    header('Location: index.php?page=profile');
=======
<?php
session_start();
    require_once 'connect.php';

    $login = $_SESSION['user']['login'];
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $family_name = $_POST['family_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $birthday = $_POST['birthday'];
    $citizenship = $_POST['citizenship'];
    $country = $_POST['country'];
    $ser_num = $_POST['ser_num'];
    
 $date = date_format(date_create($birthday), 'Y-m-d');

    $_SESSION['user']['first_name'] = $first_name;
    $_SESSION['user']['last_name'] = $last_name;
    $_SESSION['user']['family_name'] = $family_name;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['Phone'] = $number;
    $_SESSION['user']['Birthday'] = $birthday;
    $_SESSION['user']['Citizenship_pass'] = $citizenship;
    $_SESSION['user']['Country_pass'] = $country;
    $_SESSION['user']['Ser_num_pass'] = $ser_num;

    $edit=mysqli_query($link, "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name',`family_name` = '$family_name', `email` = '$email', `Phone` = '$number',
     `Birthday` = '$date', `Citizenship_pass` = '$citizenship', `Country_pass` = '$country',`Ser_num_pass` = '$ser_num'
      WHERE `users`.`login` = '$login'");



    header('Location: index.php?page=profile');
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
?>