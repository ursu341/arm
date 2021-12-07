<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HodimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hodim-index">

    <h2 style="text-align: center">Hodimlar ma'lumotlari</h2>

    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'fio_uz',
            'lavozim_uz',
            //'pochta',
            'tel',
            //'bulim_id',
            //'fio_ru',
            //'fio_en',
            //'lavozim_ru',
            //'lavozim_en',
            //'malumoti_uz',
            //'malumoti_ru',
            //'malumoti_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
