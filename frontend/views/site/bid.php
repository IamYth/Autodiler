<?php
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;

use yii\helpers\Html;
use yii\web\View;

use yii\widgets\DetailView;

use common\models\Bid;
use common\models\Modelauto;
/* @var $this yii\web\View */

$this->title = 'Автодилер';
?>
<div class="">

    <div class="jumbotron">
      <div class="container">
        <h3>Автодилер</h3>

    </div>
  </div>
    <div class="body-content">

        <div class="row">

        </div>
        <div>
          <?php $form = ActiveForm::begin(); ?>

          <?= $form->field($model, 'name')->textInput(['maxlength' => true], ['promt' => 'asdasd']) ?>

          <?= $form->field($model, 'number')->textInput() ?>

          <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

          <?php print_r($model->attributes); ?>

          <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
