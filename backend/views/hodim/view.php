<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Hodim */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="hodim-view">


    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fio_uz',
            'lavozim_uz',
            'pochta',
            'tel',
            'bulim_id',
            'fio_ru',
            'fio_en',
            'lavozim_ru',
            'lavozim_en',
            'malumoti_uz',
            'malumoti_ru',
            'malumoti_en',
        ],
    ]) ?>

</div>
