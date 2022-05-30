<?php 
session_start();
require('templates/header.php');
?>

<?php  
//соединение с бд
    require('connect.php');
//подключение к бд
    if(!isset($_SESSION['sql'])){
        $_SESSION['sql'] = "SELECT * FROM `timetable`
            INNER JOIN `flight_t` ON timetable.id_flight_t = flight_t.id_flight_t";
    }
    $sql_text = $_SESSION['sql'];
    $sql=$link->query($sql_text); 


//переход по страницам
    $page=$_GET['page'];
//переход на основную страницу
    if (!isset($page)) {
        require('templates/main.php');
    }  elseif ($page == 'index') {
        require('templates/main.php');
//переход на страницу с билетами
    } elseif ($page == 'flight') {
        require('flight.php');
//переход на профиль
    } elseif ($page == 'profile') {
        require('profile.php');
//переход на страницу входа в личный кабине
    } elseif ($page == 'login') {
        if ($_SESSION['user']) {
            if ($_SESSION['user']['role'] == 1) {
                require('admin.php');    
            } else{
                require('profile.php');
            }
        }else{
            require('login.php');
        }
//переход на страницу администратора
    } elseif ($page == 'admin') {
        require('admin.php');
//переход на корзину с билетами
    } elseif ($page == 'register') {
        require('register.php');
//переход на удаление билетов
    } elseif ($page == 'delete') {
        require('delete.php');
//переход на корзину с проверкой данных пользователя
    } elseif ($page == 'checkcustomer') {
        require('checkout-customer.php');
//переход на cхему с билетами пользователя
    } elseif ($page == 'scheme') {

        $id_flight=$_GET['id_flight'];
        $id_timetable=$_GET['id_timetable'];
        $_SESSION['id_flight']=$id_flight;
        $_SESSION['id_timetable']=$id_timetable;

        require('scheme/scheme.php');
//переход на страницу для отзывов
    } elseif ($page == 'contact') {
        require('contact.php');
//переход на корзину с оплатой товара
    } elseif ($page == 'checkcomplete') {
        require('checkout-complete.php');
//переход на страницу с конкретным билетом
    } elseif ($page == 'detail') {
        $idg = $_GET['id'];
        $_SESSION['id_flight_t'] = $idg;
        $good = [];

        
        foreach ($sql as $ticket) {
            if($ticket['id_flight_t'] == $idg) {
                $good=$ticket;
                break;
            }
        }

        /*$id_to = $_GET['to_city'];
        $id_from = $_GET['from_city'];
        $good = [];
        
        foreach ($sql as $ticket) {
            if($ticket['to_city'] == $id_to) {
                if ($ticket['from_city'] == $id_from) {
                    $good=$ticket;
                }
            }
        }*/

    require('flight-detail.php');

    //поиск по дате и времени
    
    } elseif ($page == 'search') {
        $sql_text="SELECT *
                  FROM `flight_t` WHERE ";
        if (isset($_SESSION['query'])) {
            $sql_text .=$_SESSION['query'];

            if (isset($_SESSION['query_from'])) {
                $sql_text2=$_SESSION['query_from'];
                $sql_text .= " AND ";
                $sql_text .= $sql_text2;
                $sql = $link -> query($sql_text);
                unset($_SESSION['query_from']);
                unset($_SESSION['query']);


            }else{
                $sql = $link -> query($sql_text);
                unset($_SESSION['query']);

            }
        }else{
                if (isset($_SESSION['query_from'])) {
                    $sql_text2=$_SESSION['query_from'];
                    $sql_text .= $sql_text2;
                    
                    $sql = $link -> query($sql_text);
                    unset($_SESSION['query_from']);


                }
            }
if (isset($_GET['detail_country'])) {
    $sql_text3=$_GET['detail_country'];
    $sql_query_detail = "SELECT *
                  FROM `flight_t` WHERE `to_country` LIKE '%$sql_text3%'";   
    $sql = $link -> query($sql_query_detail);
}

if (isset($_SESSION['query_date_from'])) {

$date = $_SESSION['query_date_from'];
$d1 = strtotime($date); // переводит из строки в дату
$date2 = date("Y-m-d", $d1);
$sql_query_date_from = "SELECT * FROM `flight_t` WHERE `date_from` >= '$date2'";
    $sql = $link -> query($sql_query_date_from);
    unset($_SESSION['query_date_from']);
}

if (isset($_SESSION['query_date_to'])) {

$date_to = $_SESSION['query_date_to'];
$d1_to = strtotime($date_to); // переводит из строки в дату
$date2_to = date("Y-m-d", $d1_to);
$sql_query_date_to = "SELECT * FROM `flight_t` WHERE `date_from` <= '$date2_to'";
    $sql = $link -> query($sql_query_date_to);
var_dump($sql);
    unset($_SESSION['query_date_to']);
}

    require('flight.php');
}elseif ($page == 'searchFrom') {

    $sql_text=$_SESSION['query_from'];
    $sql = $link -> query($sql_text);

    require('flight.php');
}
//сортировка по алфавитному порядку
 elseif ($page == 'sort') {
    $idg = $_GET['id_sort'];
    if($idg == 1){
        $sql_text.= " ORDER BY `to_city`";
    }if($idg == 2){
        $sql_text.= " ORDER BY `to_city` DESC";
    }
    $sql=$link->query($sql_text);

    require('flight.php');
}
?>



<?php 
require('templates/footer.php');
?>


<!-- карусель -->
     <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript">
            $('.timepicker-24-hr').wickedpicker({now: '0:00', twentyFour: true, title:
                    'Heure', showSeconds: false});
            var timepickers = $('.timepicker-24-hr').wickedpicker(); 
            console.log(timepickers.wickedpicker('time', 1));// pour avoir la valeur d'un des timepicker
        </script>
    <script type="text/javascript">
        if($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay:"none",
                delay:10000,
                startwidth:1600,
                startheight:650,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                                        
                simplifyAll:"off",

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",
                nextSlideOnWindowFocus:"off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,
                
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                                        
                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner2",
                                        
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                forceFullWidth:"off",
                
                
                
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        }
    </script>
