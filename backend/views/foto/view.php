<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Foto */

$this->title = '';

\yii\web\YiiAsset::register($this);
?>
<div class="foto-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

            [
                'label' => 'img',
                'format'=>'raw',
                'value' => static function ($model) {
                    return Html::img('http://'.Yii::$app->request->getHostName(true).'/images/'.$model->img,['width'=>'100px','height'=>'100px']);
                }
            ]
        ],
    ]) ?>

</div>
