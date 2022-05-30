 <!-- карусель -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                        <img src="images/bg/1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          Бронируй билеты
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">По самой низкой цене</div>
                        
                        <a href="index.php?page=flight" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Забронировать</a>
                    </li> 

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 2">
                        <img src="images/bg/2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          Посмотри лучшие направлени 
                        </div>

                        <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            Путешествуй с нами
                        </div>
                        
                        <a href="index.php?page=flight" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Забронировать</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                        <img src="images/bg/3.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                            Летай
                        </div>
                        
                        <div href="#" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Отвезем в любую точку планеты</div>
                    </li> 

                </ul>
                
            </div>
        </section>
        <!-- конец / карусель -->


        <!-- поиск -->
        <section>
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>
                        <li>
                            <a href="#awe-search">
                                <i class="awe-icon awe-icon-plane"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="category-heading-content category-heading-content__2 text-uppercase">
                        <div id="awe-search-tabs" class="find">
                            <form name="search" method="post" action="search.php">
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Откуда</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            
                                        <input type="search" name="query_from">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Куда</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="search" name="query">
                                        
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Дата вылета</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="search" id="date_timepicker_start" class="timepicker" name="query_date_from">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Дата возвращения</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="search" id="date_timepicker_end" class="timepicker" name="query_date_to">
                                        </div>
                                    </div>
                                    
                                <div class="form-actions">
                                    <input type="submit" value="Найти билеты">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- конец / поиск -->

        <!-- карточки -->
        <section class="masonry-section-demo">
            <div class="container">
                <div class="destination-grid-content">
                    <div class="section-title">
                        <h3>Десятки <a href="destinations-grid.html"> Авиабилетов</a> уже ждет</h3>
                    </div>
                    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
                    <div class="row">
                        <div class="awe-masonry">

                        <?php
                            $i=0;
                            foreach ($sql as $good):
                                
                        ?>

                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="index.php?page=detail&id=<?php echo $good['id_flight_t']; ?>">
                                    <div class="image-wrap image-cover">
                                        <img src="<?php echo $good['img'];?>" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="index.php?page=openProduct&id=<?php echo $good['id']; ?>"><?php  echo $good['to_city'];?></a></h2>
                                    <div class="item-cat">
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count"><?php echo $good['price'].' ₽';?></span>
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                        <?php 
                            $i++;
                            $copy[]+= $good['id'];
                            var_dump($copy);
                            if($i==9)break;
                            endforeach;
                        ?>
                            
                        </div>
                    </div>
                    <div class="more-destination" style="margin-bottom: 26vh;">
                        <a href="index.php?page=flight">Больше направлений</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- конец / карточки -->
