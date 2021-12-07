<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Book */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'u_soni',
            'list_uz:ntext',
            'list_ru:ntext',
            'list_en:ntext',
            'o_soni',
            'list1_uz:ntext',
            'list1_ru:ntext',
            'list1_en:ntext',
            'b_soni',
            'list2_uz:ntext',
            'list2_ru:ntext',
            'list2_en:ntext',
            'i_soni',
            'list3_uz:ntext',
            'list3_ru:ntext',
            'list3_en:ntext',
        ],
    ]) ?>

</div>
