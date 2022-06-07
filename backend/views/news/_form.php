<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">
    <div class="news-form box box-primary">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
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
            <div class="col-md-12">
                <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>
            </div>
            <div class="col-md-12">
                <?=
                $form->field($model, 'image')->widget(FileInput::class,
                    [
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
                    ]
                )
                ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
</div>







<?php ActiveForm::end(); ?>

</div>
