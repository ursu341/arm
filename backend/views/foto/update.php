<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Foto */

$this->title = '';
?>
<div class="foto-update">

    <h1>Yangilash</h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
