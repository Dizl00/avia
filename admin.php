<<<<<<< HEAD
<?php 
session_start();
?>
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="width: 25%;">
                <div class="profile-img">
                    <img id="profile-img" src="images/img/tokyo.jpg" alt="">
                </div>
                <div class="col-md-6">
                 <div class="product-detail__info">
                     <div class="product-title">
                        <h2><?php echo $_SESSION['user']['first_name'] ?></h2>
                        <h2><?php echo $_SESSION['user']['last_name'] ?></h2>

                    </div>
                </div>
                    
                        <a class="exit" href="handler_form/logout.php">Выход</a>
                    
                </div> 


            </div>
                <!-- КАРТОЧКА ДЛЯ ДОБАВЛЕНИЯ -->
                        <form action="new.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="id" value="<?php echo $good['id_flight_t']; ?>" >

                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <input type="file" name="img" style="margin-top: -75px;" placeholder="Изображение">
                                    <input type="text" name="id_plane" style="margin-top: -70px;" placeholder="id модели самолета">
                                    <?php $sss= "SELECT * FROM `flight_t` ORDER BY `flight_t`.`imges` ASC"; 
    $sql_text = $sss;
    $sql=$link->query($sql_text); 
    foreach ($sql as $key) {
        echo $key['imges'];
    }?>
                                </div>
                            </div>
                            <div class="item-body">

                                <table class="item-table">
                                    <thead>
                                        <tr>
                                            <th class="route">Путь</th>
                                            <th class="depart">Вылет</th>
                                            <th class="arrive">Посадка</th>
                                            <th class="duration">Время полета</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="route">
                                                <ul id="myUL">
                                                    <li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="from_city" placeholder="Город взлета" value="">
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 140px; font-size: 15px;" name="kod_from" placeholder="код аэропорта" value=""><br>

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_country" placeholder="Страна посадки" value=""> </li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_city" placeholder="Город посадки" value=""> </li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 140px; font-size: 15px;" name="kod_to" placeholder="Код аэропорта" value=""> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_from" placeholder="00:00" value=""></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_from" placeholder="22-12-2022" value=""></span>
                                            </td>
                                            <td class="arrive">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_to" placeholder="00:00" value=""></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_to" placeholder="" value="22-12-2022"></span>
                                            </td>
                                            <td class="duration">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_travel" placeholder="00:00" value=""></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><input type="text" style="background-color: #f7f7f7; border: none; width: 80px; font-size: 15px;" name="price" placeholder="цена" value=""></span>
                                </div>
                                <button type="submit" class="awe-btn">Добавить</button>
                                </form>
                            </div>
                        </div>
                        <!-- конец / карточка для добавления -->                
   </div>
 <div class="object">
                        <?php  foreach ($sql as $good):               ?>

                        <!-- карточка -->
                        <form action="correct.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $good['id_flight_t']; ?>" >
                        
                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <img id="image_flight_img" style="    height: 165px; width: auto;" src="<?php echo $good['img'];?> " alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>">  <?php  echo $good['from_city'];?> </a>
                                    </h2>
                                    <h2>
                                        <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>">  <?php  echo $good['to_city'];?> </a>
                                    </h2>
                                </div>
                                <table class="item-table">
                                    <thead>
                                        <tr>
                                            <th class="route">Путь</th>
                                            <th class="depart">Вылет</th>
                                            <th class="arrive">Посадка</th>
                                            <th class="duration">Время полета</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="route">
                                                <ul id="myUL">
                                                    <li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="from_city" placeholder="<?php  echo $good['from_city'];?>" value="<?php  echo $good['from_city'];?>">

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_city" placeholder="<?php  echo $good['to_city'];?>" value="<?php  echo $good['to_city'];?>"> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_from" placeholder="<?php  echo date_format(date_create($good['time_from']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_from']), 'H:i');?>"></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_from" placeholder="<?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?>" value="<?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?>"></span>
                                            </td>
                                            <td class="arrive">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_to" placeholder="<?php  echo date_format(date_create($good['time_to']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_to']), 'H:i');?>"></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_to" placeholder="<?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?>" value="<?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?>"></span>
                                            </td>
                                            <td class="duration">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_travel" placeholder="<?php  echo date_format(date_create($good['time_travel']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_travel']), 'H:i');?>"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><input type="text" style="background-color: #f7f7f7; border: none; width: 80px; font-size: 15px;" name="price" placeholder="<?php  echo $good['price'];?>" value="<?php  echo $good['price'];?>"></span>
                                </div>
                                <button type="submit" class="awe-btn">Редактировать</button>
                                </form>
                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='id' value="<?php echo $good['id_flight_t'] ?>" />
                                    <input type='submit' class="awe-btn" value='Удалить'>
                               </form>
                            </div>
                        </div>
                        <!-- конец / карточка -->
                <?php endforeach; ?>
                </div>

                </div>


=======
<?php 
session_start();
?>
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="width: 25%;">
                <div class="profile-img">
                    <img id="profile-img" src="images/img/tokyo.jpg" alt="">
                </div>
                <div class="col-md-6">
                 <div class="product-detail__info">
                     <div class="product-title">
                        <h2><?php echo $_SESSION['user']['first_name'] ?></h2>
                        <h2><?php echo $_SESSION['user']['last_name'] ?></h2>

                    </div>
                </div>
                    
                        <a class="exit" href="handler_form/logout.php">Выход</a>
                    
                </div> 


            </div>
                <!-- КАРТОЧКА ДЛЯ ДОБАВЛЕНИЯ -->
                        <form action="new.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="id" value="<?php echo $good['id_flight_t']; ?>" >

                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <input type="file" name="img" style="margin-top: -75px;" placeholder="Изображение">
                                    <input type="text" name="id_plane" style="margin-top: -70px;" placeholder="id модели самолета">
                                    <?php $sss= "SELECT * FROM `flight_t` ORDER BY `flight_t`.`imges` ASC"; 
    $sql_text = $sss;
    $sql=$link->query($sql_text); 
    foreach ($sql as $key) {
        echo $key['imges'];
    }?>
                                </div>
                            </div>
                            <div class="item-body">

                                <table class="item-table">
                                    <thead>
                                        <tr>
                                            <th class="route">Путь</th>
                                            <th class="depart">Вылет</th>
                                            <th class="arrive">Посадка</th>
                                            <th class="duration">Время полета</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="route">
                                                <ul id="myUL">
                                                    <li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="from_city" placeholder="Город взлета" value="">
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 140px; font-size: 15px;" name="kod_from" placeholder="код аэропорта" value=""><br>

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_country" placeholder="Страна посадки" value=""> </li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_city" placeholder="Город посадки" value=""> </li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 140px; font-size: 15px;" name="kod_to" placeholder="Код аэропорта" value=""> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_from" placeholder="00:00" value=""></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_from" placeholder="22-12-2022" value=""></span>
                                            </td>
                                            <td class="arrive">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_to" placeholder="00:00" value=""></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_to" placeholder="" value="22-12-2022"></span>
                                            </td>
                                            <td class="duration">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_travel" placeholder="00:00" value=""></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><input type="text" style="background-color: #f7f7f7; border: none; width: 80px; font-size: 15px;" name="price" placeholder="цена" value=""></span>
                                </div>
                                <button type="submit" class="awe-btn">Добавить</button>
                                </form>
                            </div>
                        </div>
                        <!-- конец / карточка для добавления -->                
   </div>
 <div class="object">
                        <?php  foreach ($sql as $good):               ?>

                        <!-- карточка -->
                        <form action="correct.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $good['id_flight_t']; ?>" >
                        
                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <img id="image_flight_img" style="    height: 165px; width: auto;" src="<?php echo $good['img'];?> " alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>">  <?php  echo $good['from_city'];?> </a>
                                    </h2>
                                    <h2>
                                        <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>">  <?php  echo $good['to_city'];?> </a>
                                    </h2>
                                </div>
                                <table class="item-table">
                                    <thead>
                                        <tr>
                                            <th class="route">Путь</th>
                                            <th class="depart">Вылет</th>
                                            <th class="arrive">Посадка</th>
                                            <th class="duration">Время полета</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="route">
                                                <ul id="myUL">
                                                    <li>
                                                        <input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="from_city" placeholder="<?php  echo $good['from_city'];?>" value="<?php  echo $good['from_city'];?>">

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><input type="text" style="background-color: #f7f7f7; border: none; width: 180px; font-size: 15px;" name="to_city" placeholder="<?php  echo $good['to_city'];?>" value="<?php  echo $good['to_city'];?>"> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_from" placeholder="<?php  echo date_format(date_create($good['time_from']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_from']), 'H:i');?>"></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_from" placeholder="<?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?>" value="<?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?>"></span>
                                            </td>
                                            <td class="arrive">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_to" placeholder="<?php  echo date_format(date_create($good['time_to']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_to']), 'H:i');?>"></span>

                                                <span class="date"><input type="text" style="background-color: #f7f7f7;width: 120px; border: none; font-size: 15px;" name="date_to" placeholder="<?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?>" value="<?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?>"></span>
                                            </td>
                                            <td class="duration">
                                                <span><input type="text" style="background-color: #f7f7f7; border: none; width: 70px; font-size: 15px;" name="time_travel" placeholder="<?php  echo date_format(date_create($good['time_travel']), 'H:i');?>" value="<?php  echo date_format(date_create($good['time_travel']), 'H:i');?>"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><input type="text" style="background-color: #f7f7f7; border: none; width: 80px; font-size: 15px;" name="price" placeholder="<?php  echo $good['price'];?>" value="<?php  echo $good['price'];?>"></span>
                                </div>
                                <button type="submit" class="awe-btn">Редактировать</button>
                                </form>
                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='id' value="<?php echo $good['id_flight_t'] ?>" />
                                    <input type='submit' class="awe-btn" value='Удалить'>
                               </form>
                            </div>
                        </div>
                        <!-- конец / карточка -->
                <?php endforeach; ?>
                </div>

                </div>


>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
</div>