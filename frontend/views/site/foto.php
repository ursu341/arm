<?php

/**
 * @var $item Foto
 * @var $model Foto[]
 */

use backend\models\Foto;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\bootstrap\Html;

?>
<div class="row">
    <div class="col-12">
        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'assetType' => OwlCarouselWidget::ASSET_TYPE_LOCAL,
            'jqueryFunction' => '$',// or $
            'containerOptions' => [
                'id' => 'container-id',
                'class' => 'container-class owl-theme',
                'style' => 'padding-top:15vh'
            ],
            'pluginOptions' => [
                'autoplay' => true,
                'autoplayTimeout' => 3000,
                'items' => 1,
                'loop' => true,

            ]
        ]);
        ?>

        <?php foreach ($model as $item) : ?>
            <div class="item-class"><img src="<?= Yii::getAlias('@web') . '/images/' . $item->img ?>" alt="Image"
                                         style="width: 100%;height: 100%;">
            </div>
        <?php endforeach; ?>

        <?php OwlCarouselWidget::end(); ?>
    </div>

</div>