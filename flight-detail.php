<<<<<<< HEAD
<?php   
require('connect.php');
            //вывод самолетов
        $_SESSION['sqlc'] = "SELECT * FROM `plane`";
        $sqlc_text = $_SESSION['sqlc'];
        $sqlc=$link->query($sqlc_text); 
        $idc = $good['id_plane'];
        $goodc = [];
        foreach ($sqlc as $categ) {
            if($categ['id_plane'] == $idc) {
                $goodc=$categ;
                break;
            }
        }

    $_SESSION['sql_d'] = "SELECT * FROM `timetable`
            INNER JOIN `flight_t` ON timetable.id_flight_t = flight_t.id_flight_t
            WHERE `from_city` = '$good[from_city]' AND `to_city` = '$good[to_city]'";
    $sql_text_d = $_SESSION['sql_d'];
    $sql_d=$link->query($sql_text_d); 
?>

        <!-- переходы под шапкой -->
        <section>
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="index.php?page=flight">Авиабилеты</a></li>
                        <li><a href="index.php?page=search&detail_country=<?php echo $good['to_country'];?>">
                            <?php  echo $good['to_country'];?></a></li>
                        <li><span><?php  echo $good['to_city'];?></span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- конец / переходы под шапкой -->

        <!-- шапка карточки -->
        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <h2><?php  echo $good['to_country'];?> : <?php  echo $good['to_city'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="product-tabs tabs">
                            <ul>
                                <li>
                                    <a href="#tabs-1">    Билет    </a>
                                </li>

                                <li>
                                    <a href="#tabs-2">Необходимо знать</a>
                                </li>
                            </ul>

                            <!-- конец / шапка карточки -->

                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <div class="initiative">

                                        <!-- Карточка билета -->
                                        <div class="initiative__item">
                                            <div class="initiative-top">
                                                <div class="title">
                                                    <div class="from-to">
                                                        <span class="from"><?php  echo $good['from_city'];?></span>
                                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                                        <span class="to"><?php  echo $good['to_city'];?></span>
                                                    </div>
                                                    <div class="time">
                                                        Время перелета: 
                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <?php $tarif = 0; 
                                    foreach ($sql_d as $good): 
                                        $tarif += 1234;

        $_SESSION['sql_date'] = "SELECT * FROM `timetable`";
        $sql_date_text = $_SESSION['sql_date'];
        $sql_date=$link->query($sql_date_text); 
        $id_sql_flight = $good['id_flight_t'];
        $good_date = [];
        foreach ($sql_date as $date) {
            if($date['id_flight_t'] == $id_sql_flight) {
                $good_date=$date;
                /*$_SESSION['id_timetable'] = $date['id_timetable'];
                var_dump($_SESSION['id_timetable']);*/
                break;
            }
        }
        
                                        ?>

                                            <table class="initiative-table">

                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="item-thumb">
                                                                <div class="image-thumb">
                                                                    <img src="images/flight/4.jpg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    <p><?php echo $goodc['model'];?></p>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="amount"><?php echo $good['price'].' ₽';?></span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td style="  width: 36%; ">
                                                            <div class="item-body">
                                                                <div class="item-from">
                                                                    <h3><?php echo $good['kod_from'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_from']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($date['date_from']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $goodc['airport'];?></p>
                                                                </div>
                                                                <div class="item-time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span>
                                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>
                                                                    </span>
                                                                </div>
                                                                <div class="item-to">
                                                                    <h3><?php echo $good['kod_to'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_to']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($date['date_to']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $good['airport_to'];?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <form id="form1" name="form1" action="index.php?page=scheme&id_flight=<?php echo $good['id_flight_t']?>&id_timetable=<?php echo $date['id_timetable']; ?>" method="post">

                                                                    <!-- начало невидимой части формы -->
                                        <?php var_dump($good['id_flight_t']); var_dump($date['id_timetable']); ?>
                                                              
                                                                        <?php 
                                                                            /*$_SESSION['id_flight_t'] = $good['id_flight_t'];
                                                                            
                                                                            
                                                                            var_dump($_SESSION['id_flight_t']);
*/
                                                                        ?>

                                                                    
                                                                    <!-- конец невидимой части формы -->

<!-- ВЫБОР ТАРИФА -->
<?php 

    $n = 3400;
    $b = 4600;
    $t1 = $tarif + 1;
    $t2 = $tarif+ 2;
    $t3 = $tarif + 3;
        ?>
<!-- ТАРИФ ЭКОНОМ -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
        <script type="text/javascript">
            function showHide(element_id) {
                //Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
            }   
        </script>
<!-- При клике запускаем функцию showHide, и передаем параметр 
        id-шник элемента который нужно показать/скрыть -->
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t1 ?>')" ><h6 class="tarif">Эконом</h6></a><br/><br/>
        <div id="<?php echo $t1 ?>" style="display: none; font-size: 12px; margin-top: -44px;">
            <p style="font-size: 14px;"><b> Багаж: </b></p>
            Багаж платный</br>
            Ручная кладь 1 сумка до 10 кг,</br> до 55x40x23 см

            <p></p>
            <p style="font-size: 14px;"><b>Условия:</b></p>
            Обмен со сбором</br>
            Возврат недоступен

            <p></p>
            <p style="font-size: 14px;"><b>Услуги:</b></p>
            Выбор места
            <div style="margin-top: 8px;">
    <button type="submit" name="bron-min" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 
    </div>
        </div>
        </td>
<!-- КОНЕЦ / ТАРИФ ЭКОНОМ -->
<!-- ТАРИФ СРЕДНИЙ -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t2 ?>')"><h6 style="color: #0091ea;">Стандарт</h6></a><br/><br/>
        <div id="<?php echo $t2 ?>" style="display: none; font-size: 12px;margin-top: -44px;">
            <p style="font-size: 14px;">+<?php echo $n?> ₽ </p>
            <p style="font-size: 14px;"><b> Багаж: </b></p>
            1 сумка 23 кг</br>
            Ручная кладь 1 сумка до 10 кг, </br>
            до 55x40x23 см

            <p></p>
            <p style="font-size: 14px;"><b>Условия:</b></p>
            Обмен со сбором</br>
            Возврат со сбором

            <p></p>
            <p style="font-size: 14px;"><b>Услуги:</b></p>
            Выбор места
     <button type="submit" name="bron-norm" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 
        </div>
        </td>
<!-- КОНЕЦ / ТАРИФ СРЕДНИЙ -->
<!-- ТАРИФ БИЗНЕНС -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
 
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t3 ?>')"><h6 style="color: #0091ea;">Бизнес</h6></a><br/><br/>
        <div id="<?php echo $t3 ?>" style="display: none; font-size: 12px; margin-top: -44px;">
<p style="font-size: 14px;">+<?php echo $b ?> ₽ </p>
<p style="font-size: 14px;"><b> Багаж: </b></p>
1 сумка 32 кг</br>
Ручная кладь 1 сумка до 10 кг,</br> до 55x40x23 см
<p></p>
<p style="font-size: 14px;"><b>Условия:</b></p>
Обмен без сборов</br>
Полный возврат

<p></p>
<p style="font-size: 14px;"><b>Услуги:</b></p>
Лучшие места</br>
Выбор питания</br>
Приоритет в аэропорту</br>
Бизнес зал

     <button type="submit" name="bron-max" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 

        </div>
        </td>
    </tr>
    <!-- КОНЕЦ / ТАРИФ БИЗНЕНС -->
                                                                    </form>
                                        
                                                </tbody>
                                            </table>
<!-- КОНЕЦ / ВЫБОР ТАРИФА -->

                                            <?php endforeach ?>

                                        </div>
                                        <!-- конец / карточка билета -->
                                    </div>
                                </div>

                                <!-- раздел справка -->
                                <div id="tabs-2">
                                    <table class="good-to-know-table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>Отмена / предоплата</p>
                                                </th>
                                                <td>
                                                    <p>За бронирование и его отмену в установленный срок дополнительная плата не взымается. </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Дополнительная норма багажа</p>
                                                </th>
                                                <td>
                                                    <p>Стоимость доплаты за дополнительный багаж устанавливается в соответствии со временем обращения.</p>
                                                    <p>Стоимость дополнительного места багажа рассчитывается по специальной формуле исходя из тарифов за превышение нормативов, принятых для определенных направлений. </p>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Все параметры багажа подразделяют на три категории</p>
                                                </th>
                                                    <td>
                                                        <p>Число мест. Каждый провозимый чемодан либо сумка считается одним местом. Если их количество больше одного, назначается доплата.</p>
                                                        <p>Вес. Для багажа в случае перевеса чемодана придется заплатить по установленному тарифу. Это касается также превышения веса сумки, входящей в норму количества мест для бесплатного провоза.</p>
                                                        <p>Габариты. Регистрируемые багажные предметы при суммировании их длины, высоты и ширины должны укладываться в 203 см. В салон можно взять сумку, не превышающую размеров 55х40х20 см.</p>
                                                    </td>
                                            </tr>   
                                            <tr>
                                                <th>
                                                    <p>Интернет</p>
                                                </th>
                                                <td>
                                                    <p>Бесплатно! На борту самолета Wi-Fi предоставляется бесплатно.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Животные</p>
                                                </th>
                                                <td>
                                                    <p>Домашние животные разрешены. Может взиматься дополнительная плата.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Группы</p>
                                                </th>
                                                <td>
                                                    <p>При бронировании для более чем 11 посадочных мест могут применяться другие правила и взиматься дополнительная плата. Уточнить информацию можно написав на нашу почту.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Оплата принимается следующими картами</p>
                                                </th>
                                                <td>
                                                    <p><img src="images/paypal2.png" alt=""></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        <!-- конец / раздел справка -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="detail-sidebar">
                            <div class="call-to-book">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
=======
<?php   
require('connect.php');
            //вывод самолетов
        $_SESSION['sqlc'] = "SELECT * FROM `plane`";
        $sqlc_text = $_SESSION['sqlc'];
        $sqlc=$link->query($sqlc_text); 
        $idc = $good['id_plane'];
        $goodc = [];
        foreach ($sqlc as $categ) {
            if($categ['id_plane'] == $idc) {
                $goodc=$categ;
                break;
            }
        }

    $_SESSION['sql_d'] = "SELECT * FROM `timetable`
            INNER JOIN `flight_t` ON timetable.id_flight_t = flight_t.id_flight_t
            WHERE `from_city` = '$good[from_city]' AND `to_city` = '$good[to_city]'";
    $sql_text_d = $_SESSION['sql_d'];
    $sql_d=$link->query($sql_text_d); 
?>

        <!-- переходы под шапкой -->
        <section>
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="index.php?page=flight">Авиабилеты</a></li>
                        <li><a href="index.php?page=search&detail_country=<?php echo $good['to_country'];?>">
                            <?php  echo $good['to_country'];?></a></li>
                        <li><span><?php  echo $good['to_city'];?></span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- конец / переходы под шапкой -->

        <!-- шапка карточки -->
        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <h2><?php  echo $good['to_country'];?> : <?php  echo $good['to_city'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="product-tabs tabs">
                            <ul>
                                <li>
                                    <a href="#tabs-1">    Билет    </a>
                                </li>

                                <li>
                                    <a href="#tabs-2">Необходимо знать</a>
                                </li>
                            </ul>

                            <!-- конец / шапка карточки -->

                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <div class="initiative">

                                        <!-- Карточка билета -->
                                        <div class="initiative__item">
                                            <div class="initiative-top">
                                                <div class="title">
                                                    <div class="from-to">
                                                        <span class="from"><?php  echo $good['from_city'];?></span>
                                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                                        <span class="to"><?php  echo $good['to_city'];?></span>
                                                    </div>
                                                    <div class="time">
                                                        Время перелета: 
                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <?php $tarif = 0; 
                                    foreach ($sql_d as $good): 
                                        $tarif += 1234;

        $_SESSION['sql_date'] = "SELECT * FROM `timetable`";
        $sql_date_text = $_SESSION['sql_date'];
        $sql_date=$link->query($sql_date_text); 
        $id_sql_flight = $good['id_flight_t'];
        $good_date = [];
        foreach ($sql_date as $date) {
            if($date['id_flight_t'] == $id_sql_flight) {
                $good_date=$date;
                /*$_SESSION['id_timetable'] = $date['id_timetable'];
                var_dump($_SESSION['id_timetable']);*/
                break;
            }
        }
        
                                        ?>

                                            <table class="initiative-table">

                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="item-thumb">
                                                                <div class="image-thumb">
                                                                    <img src="images/flight/4.jpg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    <p><?php echo $goodc['model'];?></p>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="amount"><?php echo $good['price'].' ₽';?></span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td style="  width: 36%; ">
                                                            <div class="item-body">
                                                                <div class="item-from">
                                                                    <h3><?php echo $good['kod_from'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_from']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($date['date_from']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $goodc['airport'];?></p>
                                                                </div>
                                                                <div class="item-time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span>
                                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>
                                                                    </span>
                                                                </div>
                                                                <div class="item-to">
                                                                    <h3><?php echo $good['kod_to'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_to']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($date['date_to']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $good['airport_to'];?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <form id="form1" name="form1" action="index.php?page=scheme&id_flight=<?php echo $good['id_flight_t']?>&id_timetable=<?php echo $date['id_timetable']; ?>" method="post">

                                                                    <!-- начало невидимой части формы -->
                                        <?php var_dump($good['id_flight_t']); var_dump($date['id_timetable']); ?>
                                                              
                                                                        <?php 
                                                                            /*$_SESSION['id_flight_t'] = $good['id_flight_t'];
                                                                            
                                                                            
                                                                            var_dump($_SESSION['id_flight_t']);
*/
                                                                        ?>

                                                                    
                                                                    <!-- конец невидимой части формы -->

<!-- ВЫБОР ТАРИФА -->
<?php 

    $n = 3400;
    $b = 4600;
    $t1 = $tarif + 1;
    $t2 = $tarif+ 2;
    $t3 = $tarif + 3;
        ?>
<!-- ТАРИФ ЭКОНОМ -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
        <script type="text/javascript">
            function showHide(element_id) {
                //Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
            }   
        </script>
<!-- При клике запускаем функцию showHide, и передаем параметр 
        id-шник элемента который нужно показать/скрыть -->
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t1 ?>')" ><h6 class="tarif">Эконом</h6></a><br/><br/>
        <div id="<?php echo $t1 ?>" style="display: none; font-size: 12px; margin-top: -44px;">
            <p style="font-size: 14px;"><b> Багаж: </b></p>
            Багаж платный</br>
            Ручная кладь 1 сумка до 10 кг,</br> до 55x40x23 см

            <p></p>
            <p style="font-size: 14px;"><b>Условия:</b></p>
            Обмен со сбором</br>
            Возврат недоступен

            <p></p>
            <p style="font-size: 14px;"><b>Услуги:</b></p>
            Выбор места
            <div style="margin-top: 8px;">
    <button type="submit" name="bron-min" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 
    </div>
        </div>
        </td>
<!-- КОНЕЦ / ТАРИФ ЭКОНОМ -->
<!-- ТАРИФ СРЕДНИЙ -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t2 ?>')"><h6 style="color: #0091ea;">Стандарт</h6></a><br/><br/>
        <div id="<?php echo $t2 ?>" style="display: none; font-size: 12px;margin-top: -44px;">
            <p style="font-size: 14px;">+<?php echo $n?> ₽ </p>
            <p style="font-size: 14px;"><b> Багаж: </b></p>
            1 сумка 23 кг</br>
            Ручная кладь 1 сумка до 10 кг, </br>
            до 55x40x23 см

            <p></p>
            <p style="font-size: 14px;"><b>Условия:</b></p>
            Обмен со сбором</br>
            Возврат со сбором

            <p></p>
            <p style="font-size: 14px;"><b>Услуги:</b></p>
            Выбор места
     <button type="submit" name="bron-norm" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 
        </div>
        </td>
<!-- КОНЕЦ / ТАРИФ СРЕДНИЙ -->
<!-- ТАРИФ БИЗНЕНС -->
        <td style="max-width: 50px; max-height: 50px; vertical-align: super;">
 
        <a href="javascript:void(0)" onclick="showHide('<?php echo $t3 ?>')"><h6 style="color: #0091ea;">Бизнес</h6></a><br/><br/>
        <div id="<?php echo $t3 ?>" style="display: none; font-size: 12px; margin-top: -44px;">
<p style="font-size: 14px;">+<?php echo $b ?> ₽ </p>
<p style="font-size: 14px;"><b> Багаж: </b></p>
1 сумка 32 кг</br>
Ручная кладь 1 сумка до 10 кг,</br> до 55x40x23 см
<p></p>
<p style="font-size: 14px;"><b>Условия:</b></p>
Обмен без сборов</br>
Полный возврат

<p></p>
<p style="font-size: 14px;"><b>Услуги:</b></p>
Лучшие места</br>
Выбор питания</br>
Приоритет в аэропорту</br>
Бизнес зал

     <button type="submit" name="bron-max" class="tarif-btn" style="font-size: 14px;">Продолжить</button> 

        </div>
        </td>
    </tr>
    <!-- КОНЕЦ / ТАРИФ БИЗНЕНС -->
                                                                    </form>
                                        
                                                </tbody>
                                            </table>
<!-- КОНЕЦ / ВЫБОР ТАРИФА -->

                                            <?php endforeach ?>

                                        </div>
                                        <!-- конец / карточка билета -->
                                    </div>
                                </div>

                                <!-- раздел справка -->
                                <div id="tabs-2">
                                    <table class="good-to-know-table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>Отмена / предоплата</p>
                                                </th>
                                                <td>
                                                    <p>За бронирование и его отмену в установленный срок дополнительная плата не взымается. </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Дополнительная норма багажа</p>
                                                </th>
                                                <td>
                                                    <p>Стоимость доплаты за дополнительный багаж устанавливается в соответствии со временем обращения.</p>
                                                    <p>Стоимость дополнительного места багажа рассчитывается по специальной формуле исходя из тарифов за превышение нормативов, принятых для определенных направлений. </p>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Все параметры багажа подразделяют на три категории</p>
                                                </th>
                                                    <td>
                                                        <p>Число мест. Каждый провозимый чемодан либо сумка считается одним местом. Если их количество больше одного, назначается доплата.</p>
                                                        <p>Вес. Для багажа в случае перевеса чемодана придется заплатить по установленному тарифу. Это касается также превышения веса сумки, входящей в норму количества мест для бесплатного провоза.</p>
                                                        <p>Габариты. Регистрируемые багажные предметы при суммировании их длины, высоты и ширины должны укладываться в 203 см. В салон можно взять сумку, не превышающую размеров 55х40х20 см.</p>
                                                    </td>
                                            </tr>   
                                            <tr>
                                                <th>
                                                    <p>Интернет</p>
                                                </th>
                                                <td>
                                                    <p>Бесплатно! На борту самолета Wi-Fi предоставляется бесплатно.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Животные</p>
                                                </th>
                                                <td>
                                                    <p>Домашние животные разрешены. Может взиматься дополнительная плата.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Группы</p>
                                                </th>
                                                <td>
                                                    <p>При бронировании для более чем 11 посадочных мест могут применяться другие правила и взиматься дополнительная плата. Уточнить информацию можно написав на нашу почту.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Оплата принимается следующими картами</p>
                                                </th>
                                                <td>
                                                    <p><img src="images/paypal2.png" alt=""></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        <!-- конец / раздел справка -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="detail-sidebar">
                            <div class="call-to-book">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
