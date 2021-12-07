<?php

/* @var $this yii\web\View */
/* @var $model \backend\models\Hodim[] */

use yii\helpers\Html;
?>

<br><br>
<br><br>
<h3 style="text-align: center; margin-top: 20px">RAHBARIYAT</h3>
<hr>
<?php foreach ($model as $item) { ?>
    <div class="row">
        <div class="col-md-3">
            <img src="/backend/web/hodim/<?= $item->img ?>" style="width: 230px; height:250px;" class="img-thumbnail"
                 alt="">
        </div>
        <div class="col-md-9">
            <h3><?= $item->lavoz ?></h3>
            <h3><?= $item->fio ?></h3>
            <h3><?= $item->malumoti ?></h3>
            <h3><?= $item->pochta ?></h3>
            <h3><?= $item->tel ?></h3>
        </div>
    </div>
    <hr>
<? } ?>
<!--<div class="row">-->
<!--    <div class="col-md-12"><br>-->
<!--    --><?php //foreach ($model as $item){?>
<!--       <div class="col-md-4">-->
<!--           <a href="--><?//=\yii\helpers\Url::to(['site/ish?id='.$item['id']])?><!--"><div class="panel panel-primary">-->
<!--            <div class="panel-heading"  style="height: 160px;text-align: center;font-size: 19px"><br>--><?//=$item[$name]?><!--</div>-->
<!--        </div></a>-->
<!--        </div>-->
<?php //}?>
<!--    </div>-->
<!--</div>-->
