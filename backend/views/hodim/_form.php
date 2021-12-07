<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */
/* @var $form yii\widgets\ActiveForm */

$center = \backend\models\Bulim::find()->all();
$data= \yii\helpers\ArrayHelper::map($center,'id' ,'name_uz');
?>

<div class="hodim-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'fio_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lavozim_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lavozim_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lavozim_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'malumoti_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'malumoti_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'malumoti_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pochta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'bulim_id')->widget(\kartik\select2\Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Tanlang ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
