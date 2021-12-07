<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'u_soni') ?>

    <?= $form->field($model, 'list_uz') ?>

    <?= $form->field($model, 'list_ru') ?>

    <?= $form->field($model, 'list_en') ?>

    <?php // echo $form->field($model, 'o_soni') ?>

    <?php // echo $form->field($model, 'list1_uz') ?>

    <?php // echo $form->field($model, 'list1_ru') ?>

    <?php // echo $form->field($model, 'list1_en') ?>

    <?php // echo $form->field($model, 'b_soni') ?>

    <?php // echo $form->field($model, 'list2_uz') ?>

    <?php // echo $form->field($model, 'list2_ru') ?>

    <?php // echo $form->field($model, 'list2_en') ?>

    <?php // echo $form->field($model, 'i_soni') ?>

    <?php // echo $form->field($model, 'list3_uz') ?>

    <?php // echo $form->field($model, 'list3_ru') ?>

    <?php // echo $form->field($model, 'list3_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
