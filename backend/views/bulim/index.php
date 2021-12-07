<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BulimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';

?>
<div class="bulim-index">

    <h2 style="text-align: center">Bo'limlar ma'lumotlari</h2>
    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name_uz',
            //'name_ru',
            //'name_en',
            //'text_uz:ntext',
            //'text_ru:ntext',
            //'taxt_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
