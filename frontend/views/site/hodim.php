<?php
/**
 * Created by PhpStorm.
 * User: MRK
 * Date: 25.02.2019
 * Time: 12:14
 */

?>
<br>
<br>

<?php if($bulim[$text]){?>
<h3 style="text-align: center; margin-top: 20px">BO'LIM HAQIDA</h3>
<p><?=$bulim[$text]?></p>
<?php }?>
    <h3 style="text-align: center; margin-top: 20px">HODIMLAR</h3>
    <hr>
    <?php foreach ($model as $item){ ?>
<div class="row">
    <div class="col-md-3">
        <img src="/backend/web/hodim/<?=$item->img?>" style="width: 230px; height:250px;" class="img-thumbnail" alt="">
    </div>
    <div class="col-md-9">
        <h3><?=$item[$lavozim]?></h3>
        <h3><?=$item[$fio]?></h3>
        <h3><?=$item[$malumoti]?></h3>
        <h3><?=$item->pochta?></h3>
        <h3><?=$item->tel?></h3>
    </div>
    </div>
        <hr>
<?php }?>

