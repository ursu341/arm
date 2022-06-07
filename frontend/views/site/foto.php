<?php

/**
 * @var $item Foto
 * @var $model Foto[]
 */

use backend\models\Foto;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\bootstrap\Html;

?>
<div>
    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'assetType' => OwlCarouselWidget::ASSET_TYPE_LOCAL,
        'jqueryFunction' => '$',// or $
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'container-class owl-theme',
            'style'=>'width:100%;padding-top:70px; height:100%;'
        ],
        'pluginOptions' => [
            'autoplay' => true,
            'autoplayTimeout' => 3000,
            'items' => 1,
            'loop' => true,
            'itemsDesktop' => [1199, 3],
            'itemsDesktopSmall' => [979, 3]
        ]
    ]);
    ?>

    <?php foreach ($model as $item) : ?>
        <div class="item-class"><img src="<?= Yii::getAlias('@web') . '/images/' . $item->img ?>" alt="Image" style="width: 100%;height: 100%;max-width: content-box;max-height: content-box"></div>
    <?php endforeach; ?>

    <?php OwlCarouselWidget::end(); ?>
</div>

