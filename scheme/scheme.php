<?php 
session_start();

?>

    <link rel="stylesheet" href="scheme/css/scheme.css">

     <div class="scheme" >
    <div class="session_info">
<?php  
    $id_f = $_SESSION['id_flight'];
    $id_timetable = $_SESSION['id_timetable'];
    var_dump($id_f);
    var_dump($id_timetable);
/*    $id_t = $_SESSION['id_time'];*/

    $sql_flight=$link->query("SELECT `to_city`, `from_city`,`id_flight_t` FROM `flight_t`");
        foreach($sql_flight as $flight):
            if ($id_f == $flight['id_flight_t']) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <a href="index.php?page=detail"><h2><?php echo $flight['from_city'] ." --- ". $flight['to_city']; ?></h2></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php break;}

        endforeach;
?>
    </div>
<div class="places">
    <form action="scheme/brn.php" method="post" style="margin-left: 100px;">
<table >
    <thead>
        <?php 
        $x=0;
        while ($x<=18) { ?>
            <th style="text-align: center;"> <?php echo $x; ?></th>
            <?php
            $x++;
        }  ?> 
    </thead>
<?php
    for ($i=1;$i<=3;$i++): ?>

                <tr>

       <?php if ($i == 1) { ?>
            <td style="text-align: center;">A</td>
       <?php }?> 
       <?php if ($i == 2) { ?>
            <td style="text-align: center;">B</td>
       <?php }?>
              <?php if ($i == 3) { ?>
            <td style="text-align: center;">c</td>
       <?php }?>
                    
                 <?php  for ($j=1;$j<=18;$j++):?>

                    <td>
                        <?php
                         
                       $sql=$link->query("SELECT * FROM `tickets` WHERE `num_row` = '$i' AND `num_place` = '$j' AND `id_timetable` = '$id_timetable' AND `id_flight_t` = '$id_f'");
                       $color = '#137DC5';
                       foreach($sql as $ticket):
                        if ($ticket['status'] == '1') {
                            $color = '#ff2222';
                        }
                        elseif ($ticket['status'] == '2') {
                            $color = '#22ff57';
                        }
                       endforeach;
                       ?>

                       <button class="place" style="background-color: <?php echo $color; ?>" onclick="color()" id="btn" name="<?php echo $i;?>" value="<?php echo $j;?>" ></button>

                     </td>

                <?php 
                    endfor;
                ?>
                </tr>


            <?php 
     
         endfor;
?>
<tr style="height: 25px;"></tr>
<?php
    for ($i=4;$i<=6;$i++): ?> 
                <tr>

       <?php if ($i == 4) { ?>
            <td style="text-align: center;">D</td>
       <?php }?>
       <?php if ($i == 5) { ?>
            <td style="text-align: center; padding: 10px;">E</td>
       <?php }?>
              <?php if ($i == 6) { ?>
            <td style="text-align: center; padding: 10px;">F</td>
       <?php }?>
                    
                 <?php  for ($j=1;$j<=18;$j++):?>

                    <td>
                        <?php
                         
                       $sql=$link->query("SELECT * FROM `tickets` WHERE `num_row` = '$i' AND `num_place` = '$j' AND `id_timetable` = '$id_timetable' AND `id_flight_t` = '$id_f'");
                       $color = '#137DC5';
                       foreach($sql as $ticket):
                        if ($ticket['status'] == '1') {
                            $color = '#ff2222';
                        }
                        elseif ($ticket['status'] == '2') {
                            $color = '#22ff57';
                        }
                       endforeach;
                       ?>

                       <button class="place" style="background-color: <?php echo $color; ?>" onclick="color()" id="btn" name="<?php echo $i;?>" value="<?php echo $j;?>" ></button>

                     </td>

                <?php 
                    endfor;
                ?>
                </tr>


            <?php 
     
         endfor;
?>
</table> 
<div class="color_place">
    <div class="bron"><div class="square_bron"></div><p> забронированные места</p></div>
    <div class="pay"><div class="square_pay"></div><p> оплаченные места</p></div>
</div>

<p>Выбрано: место <?php echo $_SESSION['bron']['0']['place']; ?>, ряд <?php if ($_SESSION['bron']['0']['row']==1) {
    echo "A";
} elseif ($_SESSION['bron']['0']['row']==2) {
    echo "B";
} elseif ($_SESSION['bron']['0']['row']==3) {
    echo "C";
} elseif ($_SESSION['bron']['0']['row']==4) {
    echo "D";
} elseif ($_SESSION['bron']['0']['row']==5) {
    echo "E";
} else {
    echo "F";
}
?></p>

<div class="bronpay" style="margin-top: 20px; margin-left: 25px;">
    <a href="scheme/reserve.php"><button type="button" class="btn awe-btn">Забронировать</button></a>
    <a href="index.php?page=checkcustomer"><button type="button" data-bs-toggle="modal" data-bs-target="#pay" style="margin-left: 10px;" class="awe-btn btn" >Оплатить</button></a>
</div>
 </form>

 </div>

    </div>
