<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bosh */

$this->title = 'Create Bosh';
$this->params['breadcrumbs'][] = ['label' => 'Boshes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bosh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
