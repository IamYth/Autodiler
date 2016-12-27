<?php
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;

use yii\helpers\Html;
use yii\web\View;


use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = 'Автодилер';
?>
<div class="site-index">

    <div class="jumbotron">
      <div class="container">
        <h3>Автодилер</h3>

    </div>
  </div>
    <div class="container">
        <div class="row">
              <?php foreach ($logoInView as $title): ?>
                <div class="col-sm-3 col-md-3">
                    <div>
                         <a href="index.php?r=site%2Fmodelauto&slug=<?= $title->slug ?>"><img src="<?= Yii::getAlias('@logoImgUrl').'/'.$title->logo;?>" width="150"> </a>
                    </div>
                </div>
              <?php endforeach ?>
    </div>
</div>
