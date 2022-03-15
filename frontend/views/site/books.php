<?php
/**
 * @var $this \yii\web\View
 * @var $model \backend\models\Books[]
 */
?>
<br><br>
<br><br>
<h3 style="text-align: center; margin-top: 20px">Yangi kelgan adabiyotlar</h3>
<hr>
<?php foreach ($model as $item) { ?>
    <div class="row">
        <div class="col-md-3">
            <img src="/uploads/<?= $item->img ?>" style="width: 230px; height:250px;" class="img-thumbnail"
                 alt="">
        </div>
        <div class="col-md-9">
            <h4><b><?= $item->title ?></b></h4>
            <p>
                <?=$item->desc?>
            </p>
        </div>
    </div>
    <hr>
<?php } ?>
