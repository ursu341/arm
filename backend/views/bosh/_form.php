<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bosh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bosh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list1_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list1_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list1_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list2_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list2_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list2_en')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
