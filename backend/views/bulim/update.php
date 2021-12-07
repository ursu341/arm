<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bulim */

$this->title = ' ';

?>
<div class="bulim-update">

    <h2>Yangilash</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
