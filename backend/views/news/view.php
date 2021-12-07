<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = '';
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">


    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a("O'chirish", ['delete', 'id' => $model->id], [
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

            'title_uz',
            'text_uz:ntext',
            'img',
            'date',
            'title_ru',
            'title_en',
            'text_ru:ntext',
            'text_en:ntext',
        ],
    ]) ?>

</div>
