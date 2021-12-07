<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bulim */

$this->title = '';

?>
<div class="bulim-create">

    <h2 style="text-align: center">Bo'limlar ma'lumotlari</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
