<?php

/* @var $this yii\web\View */
/* @var $model \backend\models\Bulim[] */

use yii\helpers\Html;
?>

<div class="row">
    <div class="col-md-12"><br>
        <?php foreach ($model as $item){?>
            <div class="col-md-4">
                <a href="<?=\yii\helpers\Url::to(['site/ish?id='.$item['id']])?>"><div class="panel panel-primary">
                        <div class="panel-heading"  style="height: 160px;text-align: center;font-size: 19px"><br><?=$item[$name]?></div>
                    </div></a>
            </div>
        <?php }?>
    </div>
</div>
