<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Modelauto;
use common\models\Brand;
use common\models\Type;

/* @var $this yii\web\View */
/* @var $model backend\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput() ?>

    <!-- Modelauto form -->
    <?= $form->field($modelauto, 'brand_id')->dropDownList(ArrayHelper::map(Brand::find()->all(), 'id', 'name'), ['promt' => 'Выберите бренд']); ?>

    <?= $form->field($modelauto, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->all(), 'id', 'name'), ['promt' => 'Выберите тип кузова']); ?>

    <?= $form->field($modelauto, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelauto, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelauto, 'image')->fileInput(['multiple' => true]) ?>

    <?= $form->field($modelauto, 'description')->textarea(['rows' => 6]) ?>

       <!-- Type form -->
    <?= $form->field($type, 'name')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
