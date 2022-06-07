<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */
/* @var $form ActiveForm */

$center = \backend\models\Bulim::find()->all();
$data = \yii\helpers\ArrayHelper::map($center, 'id', 'name_uz');
?>

<div class="hodim-form">
    <div class="news-form box box-primary">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'fio_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'fio_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'fio_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'lavozim_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'lavozim_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'lavozim_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'malumoti_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'malumoti_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'malumoti_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'pochta')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'tel')->widget(\yii\widgets\MaskedInput::class, [
                        'mask' => '+\9\9\8 (99) 999-99-99',
                    ]

                ) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'bulim_id')->widget(\kartik\select2\Select2::classname(), [
                    'data' => $data,
                    'options' => ['placeholder' => 'Tanlang ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])
                ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'imageFile')->widget(FileInput::class, [
                    'name' => 'attachment_53',
                    'pluginOptions' => [
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="fas fa-camera"></i> ',
                        'browseLabel' => 'Select Photo'
                    ],
                    'options' => ['accept' => 'image/*']
                ]) ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
