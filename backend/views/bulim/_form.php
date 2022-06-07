<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bulim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bulim-form">

    <div class="news-form box box-primary">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-12">
                <?=
                $form->field($model, 'text_uz')->widget(\mihaildev\ckeditor\CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                ])
                ?>
            </div>
            <div class="col-md-12">
                <?=
                $form->field($model, 'text_ru')->widget(\mihaildev\ckeditor\CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                ])
                ?>

            </div>
            <div class="col-md-12">
                <?=
                $form->field($model, 'text_en')->widget(\mihaildev\ckeditor\CKEditor::className(), [
                    'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', []),

                ]);
                ?>
            </div>

            
            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
