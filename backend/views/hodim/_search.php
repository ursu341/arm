<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HodimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hodim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'fio_uz') ?>

    <?= $form->field($model, 'lavozim_uz') ?>

    <?= $form->field($model, 'pochta') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'bulim_id') ?>

    <?php // echo $form->field($model, 'fio_ru') ?>

    <?php // echo $form->field($model, 'fio_en') ?>

    <?php // echo $form->field($model, 'lavozim_ru') ?>

    <?php // echo $form->field($model, 'lavozim_en') ?>

    <?php // echo $form->field($model, 'malumoti_uz') ?>

    <?php // echo $form->field($model, 'malumoti_ru') ?>

    <?php // echo $form->field($model, 'malumoti_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
