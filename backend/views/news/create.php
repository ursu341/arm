<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = '';
?>
<div class="news-create">

    <h3 style="text-align: center;color: #01bafd">Yangilik qo'shish</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
