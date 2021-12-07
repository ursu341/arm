<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BoshSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Boshes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bosh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bosh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'about_uz:ntext',
            'about_ru:ntext',
            'about_en:ntext',
            'list_uz:ntext',
            //'list_ru:ntext',
            //'list_en:ntext',
            //'list1_uz:ntext',
            //'list1_ru:ntext',
            //'list1_en:ntext',
            //'list2_uz:ntext',
            //'list2_ru:ntext',
            //'list2_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
