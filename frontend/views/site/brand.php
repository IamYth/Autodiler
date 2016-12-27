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
    <div class="body-content">

        <div class="row">
            <div class="col-mg-4">
              <?php foreach ($logoInView as $title): ?>

              <a href="/site/brand<?= $title->slug ?>"><?php echo $title->name; ?>  </a>
            <?php endforeach ?>
             </div>

        </div>
    </div>
</div>
