<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bosh */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boshes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bosh-view">

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
            'about_uz:ntext',
            'about_ru:ntext',
            'about_en:ntext',
            'list_uz:ntext',
            'list_ru:ntext',
            'list_en:ntext',
            'list1_uz:ntext',
            'list1_ru:ntext',
            'list1_en:ntext',
            'list2_uz:ntext',
            'list2_ru:ntext',
            'list2_en:ntext',
        ],
    ]) ?>

</div>
