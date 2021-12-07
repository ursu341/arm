<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Foto */

$this->title = '';

?>
<div class="foto-create">

    <h2 style="text-align: center">FOTO QO'SHISH</h2>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
