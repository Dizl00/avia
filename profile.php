<<<<<<< HEAD
<?php 
session_start();
?>
<section class="product-detail">
    <div class="container">
        <div class="row">
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6 col_profile">
                <div class="profile-img">
                    <img id="profile-img" src="images/img/tokyo.jpg" alt="">
                </div>
                <div class="col-md-6">
                 <div class="product-detail__info">
                     <div class="product-title">
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="first_name" value="<?php echo $_SESSION['user']['first_name'] ?>"></h2>
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="last_name" value="<?php echo $_SESSION['user']['last_name'] ?>"></h2>
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="family_name" value="<?php echo $_SESSION['user']['family_name'] ?>"></h2>
                    </div>
                    <div class="row">
                    <div class="product-email">
                        <i class="fa fa-envelope"></i>
                        <input type="text" style="background-color: #f7f7f7; border: none;" id="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                    </div>
                    </div>
                </div>
                    
                        <a class="exit" href="handler_form/logout.php">Выход</a>
                    
                </div>  
            </div>
            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="profile_info">
                                <div class="item">
                                    <h6>Номер телефона</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="number" placeholder="<?php echo $_SESSION['user']['Phone'] ?>" value="<?php echo $_SESSION['user']['Phone'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Дата рождения</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="birthday" placeholder="<?php echo $_SESSION['user']['Birthday'] ?>" value="<?php echo date_format(date_create($_SESSION['user']['Birthday']), 'd-m-Y'); ?>">
                                </div>
                                <div class="item">
                                    <h6>Гражданство</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="citizenship" placeholder="<?php echo $_SESSION['user']['Citizenship_pass'] ?>" value="<?php echo $_SESSION['user']['Citizenship_pass'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Страна выдачи</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="country" placeholder="<?php echo $_SESSION['user']['Country_pass'] ?>" value="<?php echo $_SESSION['user']['Country_pass'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Серия и номер</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="ser_num" placeholder="<?php echo $_SESSION['user']['Ser_num_pass'] ?>" value="<?php echo $_SESSION['user']['Ser_num_pass'] ?>">
                                </div>
                            </div>
            <button type="submit" class="tarif-btn">редактировать профиль</button>
        </form>
<?php 
        $sql_tickets=$link->query("SELECT * FROM `tickets` INNER JOIN `timetable` ON tickets.id_timetable = timetable.id_timetable
            INNER JOIN `flight_t` ON timetable.id_flight_t = flight_t.id_flight_t"); 
        $id_user_tickets = $_SESSION['user']['id'];
        $good_tickets = [];
        foreach ($sql_tickets as $tickets) {
            if($tickets['id_user'] == $id_user_tickets) {
                $good_tickets=$tickets;

            }
        }
        var_dump($good_tickets);    
?>

                    <table class="ticket-price">
                        <thead>
                            <tr>
                                <th class="ticket-price"><p>Билеты :</p></th>
                                <th class="adult"><span>Дата вылета</span></th>
                                <th class="kid"><span>Время вылета</span></th>
                                <th class="kid2"><span>Статус</span></th>
                            </tr>
                        </thead>
                        <?php foreach($sql_tickets as $good_tickets): ?> 
                        <tbody>
                            <tr>
                              <td class="ticket-price">
                                    <ins>
                                    <span class="amount"><?php echo $good_tickets['from_city']; ?></span>
                                    <span class="amount"><?php echo $good_tickets['to_city']; ?></span>
                                    </ins>
                                </td>
                                <td class="adult">
                                    
                                        <span class="amount"><?php echo date_format(date_create($good_tickets['date_from']), 'd-m-Y'); ?></span>
                                    
                                </td>
                                <td class="kid">
                                    
                                        <span class="amount"><?php echo date_format(date_create($good_tickets['time_from']), 'H:i'); ?></span>
                                    
                                    
                                </td>
                                <td>
                                    
                                        <span class="amount"><?php 
                                        if ($good_tickets['status'] == 1) {
                                        echo "Забронировано";
                                            }else{
                                                echo "Оплачено";
                                            }?>
                                        </span>
                                    
                                </td>
                                <td>
                                    <?php $_SESSION['id_del'] = $good_tickets['id']; ?>
                                    <a href="delete.php"><i class="awe-icon awe-icon-close-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
   </div>
=======
<?php 
session_start();
?>
<section class="product-detail">
    <div class="container">
        <div class="row">
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6 col_profile">
                <div class="profile-img">
                    <img id="profile-img" src="images/img/tokyo.jpg" alt="">
                </div>
                <div class="col-md-6">
                 <div class="product-detail__info">
                     <div class="product-title">
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="first_name" value="<?php echo $_SESSION['user']['first_name'] ?>"></h2>
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="last_name" value="<?php echo $_SESSION['user']['last_name'] ?>"></h2>
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="family_name" value="<?php echo $_SESSION['user']['family_name'] ?>"></h2>
                    </div>
                    <div class="row">
                    <div class="product-email">
                        <i class="fa fa-envelope"></i>
                        <input type="text" style="background-color: #f7f7f7; border: none;" id="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                    </div>
                    </div>
                </div>
                    
                        <a class="exit" href="handler_form/logout.php">Выход</a>
                    
                </div>  
            </div>
            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="profile_info">
                                <div class="item">
                                    <h6>Номер телефона</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="number" placeholder="<?php echo $_SESSION['user']['Phone'] ?>" value="<?php echo $_SESSION['user']['Phone'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Дата рождения</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="birthday" placeholder="<?php echo $_SESSION['user']['Birthday'] ?>" value="<?php echo date_format(date_create($_SESSION['user']['Birthday']), 'd-m-Y'); ?>">
                                </div>
                                <div class="item">
                                    <h6>Гражданство</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="citizenship" placeholder="<?php echo $_SESSION['user']['Citizenship_pass'] ?>" value="<?php echo $_SESSION['user']['Citizenship_pass'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Страна выдачи</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="country" placeholder="<?php echo $_SESSION['user']['Country_pass'] ?>" value="<?php echo $_SESSION['user']['Country_pass'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Серия и номер</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="ser_num" placeholder="<?php echo $_SESSION['user']['Ser_num_pass'] ?>" value="<?php echo $_SESSION['user']['Ser_num_pass'] ?>">
                                </div>
                            </div>
            <button type="submit" class="tarif-btn">редактировать профиль</button>
        </form>
<?php 
        $sql_tickets=$link->query("SELECT * FROM `tickets` INNER JOIN `timetable` ON tickets.id_timetable = timetable.id_timetable
            INNER JOIN `flight_t` ON timetable.id_flight_t = flight_t.id_flight_t"); 
        $id_user_tickets = $_SESSION['user']['id'];
        $good_tickets = [];
        foreach ($sql_tickets as $tickets) {
            if($tickets['id_user'] == $id_user_tickets) {
                $good_tickets=$tickets;

            }
        }
        var_dump($good_tickets);    
?>

                    <table class="ticket-price">
                        <thead>
                            <tr>
                                <th class="ticket-price"><p>Билеты :</p></th>
                                <th class="adult"><span>Дата вылета</span></th>
                                <th class="kid"><span>Время вылета</span></th>
                                <th class="kid2"><span>Статус</span></th>
                            </tr>
                        </thead>
                        <?php foreach($sql_tickets as $good_tickets): ?> 
                        <tbody>
                            <tr>
                              <td class="ticket-price">
                                    <ins>
                                    <span class="amount"><?php echo $good_tickets['from_city']; ?></span>
                                    <span class="amount"><?php echo $good_tickets['to_city']; ?></span>
                                    </ins>
                                </td>
                                <td class="adult">
                                    
                                        <span class="amount"><?php echo date_format(date_create($good_tickets['date_from']), 'd-m-Y'); ?></span>
                                    
                                </td>
                                <td class="kid">
                                    
                                        <span class="amount"><?php echo date_format(date_create($good_tickets['time_from']), 'H:i'); ?></span>
                                    
                                    
                                </td>
                                <td>
                                    
                                        <span class="amount"><?php 
                                        if ($good_tickets['status'] == 1) {
                                        echo "Забронировано";
                                            }else{
                                                echo "Оплачено";
                                            }?>
                                        </span>
                                    
                                </td>
                                <td>
                                    <?php $_SESSION['id_del'] = $good_tickets['id']; ?>
                                    <a href="delete.php"><i class="awe-icon awe-icon-close-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
   </div>
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
</div>