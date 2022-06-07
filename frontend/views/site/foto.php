<?php

/**
 * @var $item Foto
 * @var $model Foto[]
 */

use backend\models\Foto;
use yii\bootstrap\Html;

?>
<div class="row">
    <h2 style="text-align: center; margin-top: 80px">FOTOLAVHALAR</h2><br>
    <?php foreach ($model as $item) : ?>
        <div class="col-md-4">
            <?= Html::img(Yii::getAlias('@web/images/') . $item->img, ['width' => '100%', 'height' => '100%']) ?>
        </div>
    <?php endforeach; ?>
</div>
