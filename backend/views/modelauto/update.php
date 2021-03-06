<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Modelauto */

$this->title = 'Update Modelauto: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Modelautos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modelauto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
