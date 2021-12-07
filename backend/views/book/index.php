<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'u_soni',
            'list_uz:ntext',
            'list_ru:ntext',
            'list_en:ntext',
            //'o_soni',
            //'list1_uz:ntext',
            //'list1_ru:ntext',
            //'list1_en:ntext',
            //'b_soni',
            //'list2_uz:ntext',
            //'list2_ru:ntext',
            //'list2_en:ntext',
            //'i_soni',
            //'list3_uz:ntext',
            //'list3_ru:ntext',
            //'list3_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
