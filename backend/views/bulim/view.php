<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bulim */

$this->title = '';

\yii\web\YiiAsset::register($this);
?>
<div class="bulim-view">


    <p>
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
            'name_uz',
            'name_ru',
            'name_en',
            'text_uz:ntext',
            'text_ru:ntext',
            'taxt_en:ntext',
        ],
    ]) ?>

</div>
