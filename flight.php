<<<<<<< HEAD
<?php 
session_start();
?>
<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <!-- сортировка в алфовитном порядке -->
                    <select onchange="location=value">
                        <option value="" selected = "selected">Сортировка </option>
                        <option value="index.php?page=sort&id_sort=1">от А до Я</option>
                        <option value="index.php?page=sort&id_sort=2">от Я до А</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">

                        <!-- цикл для вывода всех билетов -->
                <?php  foreach ($sql as $good):               ?>

                        <!-- карточка -->
                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <img id="image_flight_img" style="    height: 165px; width: auto;" src="<?php echo $good['img'];?> " alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
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
                                                        <?php  echo $good['from_city'];?>

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><?php  echo $good['to_city'];?> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><?php  echo date_format(date_create($good['time_from']), 'H:i');?></span>
                                                <span class="date"><?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?></span>
                                            </td>
                                            <td class="arrive">
                                                <span><?php  echo date_format(date_create($good['time_to']), 'H:i');?></span>
                                                <span class="date"><?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?></span>
                                            </td>
                                            <td class="duration">
                                                <span><?php  echo date_format(date_create($good['time_travel']), 'H:i');?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><?php echo $good['price'].'₽';?></span>
                                </div>
                                <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>" class="awe-btn">Бронировать</a>
                            </div>
                        </div>
                        <!-- конец / карточка -->
                <?php endforeach; ?>
                    </div>
                </div>
            </div>
                    <!-- фильтрация -->
                <div class="col-md-3 col-md-pull-9">
                    <div class="page-sidebar">
                        <div class="sidebar-title">
                            <h2>Авиабилеты</h2>
                            <div class="clear-filter">
                                <a href="index.php?page=flight">Очистить</a>
                            </div>
                        </div>
                        <!-- виджет -->

                        <div class="widget widget_has_radio_checkbox_text">
                            <!--  <h3>Тип перелета</h3> -->
                            <div class="widget_content">
                            <form name="search_from" method="post" action="search.php">

    <!--                           <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Oneway
                                </label>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Turn-around
                                </label> -->
                                <label class="from">
                                    Место отправления
                                    <span class="form-item db">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="search" name="query_from">
                                    </span>
                                </label>
                                <label class="to">
                                    Место прибытия
                                    <span class="form-item db">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="search" name="query">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!-- конец / виджет -->
                        <!-- виджет -->
                        <div class="widget widget_price_filter">
                            <h3>Стоимость</h3>
                            <div class="price-slider-wrapper">
                                <div class="price-slider"></div>
                                <div class="price_slider_amount">
                                    <div class="\">
                                        <span class="from"></span> - <span class="to"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- конец / виджет -->
                        <button type="submit" class="awe-btn">Найти билет</button> 
                        </form>
                    </div>
                </div>
                <!-- конец / фильтрация -->
            </div>
        </div>
=======
<?php 
session_start();
?>
<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <!-- сортировка в алфовитном порядке -->
                    <select onchange="location=value">
                        <option value="" selected = "selected">Сортировка </option>
                        <option value="index.php?page=sort&id_sort=1">от А до Я</option>
                        <option value="index.php?page=sort&id_sort=2">от Я до А</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">

                        <!-- цикл для вывода всех билетов -->
                <?php  foreach ($sql as $good):               ?>

                        <!-- карточка -->
                        <div class="flight-item" id="item">
                            <div class="item-media">
                                <div id="image_flight" class="image-cover">
                                    <img id="image_flight_img" style="    height: 165px; width: auto;" src="<?php echo $good['img'];?> " alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
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
                                                        <?php  echo $good['from_city'];?>

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><?php  echo $good['to_city'];?> </li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><?php  echo date_format(date_create($good['time_from']), 'H:i');?></span>
                                                <span class="date"><?php  echo date_format(date_create($good['date_from']), 'd-m-Y');?></span>
                                            </td>
                                            <td class="arrive">
                                                <span><?php  echo date_format(date_create($good['time_to']), 'H:i');?></span>
                                                <span class="date"><?php  echo date_format(date_create($good['date_to']), 'd-m-Y');?></span>
                                            </td>
                                            <td class="duration">
                                                <span><?php  echo date_format(date_create($good['time_travel']), 'H:i');?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><?php echo $good['price'].'₽';?></span>
                                </div>
                                <a href="index.php?page=detail&id=<?php echo $good['id_flight_t'];?>" class="awe-btn">Бронировать</a>
                            </div>
                        </div>
                        <!-- конец / карточка -->
                <?php endforeach; ?>
                    </div>
                </div>
            </div>
                    <!-- фильтрация -->
                <div class="col-md-3 col-md-pull-9">
                    <div class="page-sidebar">
                        <div class="sidebar-title">
                            <h2>Авиабилеты</h2>
                            <div class="clear-filter">
                                <a href="index.php?page=flight">Очистить</a>
                            </div>
                        </div>
                        <!-- виджет -->

                        <div class="widget widget_has_radio_checkbox_text">
                            <!--  <h3>Тип перелета</h3> -->
                            <div class="widget_content">
                            <form name="search_from" method="post" action="search.php">

    <!--                           <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Oneway
                                </label>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Turn-around
                                </label> -->
                                <label class="from">
                                    Место отправления
                                    <span class="form-item db">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="search" name="query_from">
                                    </span>
                                </label>
                                <label class="to">
                                    Место прибытия
                                    <span class="form-item db">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="search" name="query">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!-- конец / виджет -->
                        <!-- виджет -->
                        <div class="widget widget_price_filter">
                            <h3>Стоимость</h3>
                            <div class="price-slider-wrapper">
                                <div class="price-slider"></div>
                                <div class="price_slider_amount">
                                    <div class="\">
                                        <span class="from"></span> - <span class="to"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- конец / виджет -->
                        <button type="submit" class="awe-btn">Найти билет</button> 
                        </form>
                    </div>
                </div>
                <!-- конец / фильтрация -->
            </div>
        </div>
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
</section>