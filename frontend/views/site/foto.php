<?php
/**
 * Created by PhpStorm.
 * User: MRK
 * Date: 25.02.2019
 * Time: 12:26
 */?>
    <div class="row" >
        <h2 style="text-align: center; margin-top: 80px">FOTOLAVHALAR</h2><br>
<?php foreach ($model as $item) {?>

    <div class="col-md-4"><img src="<?=Yii::getAlias('@web/images/').$item->img?>"   style="" class="img-thumbnail" alt=""></div>
<!--width:400px;height: 350px-->
<?php }?>
    </div>
