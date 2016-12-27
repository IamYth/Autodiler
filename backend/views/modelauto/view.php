<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Modelauto */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Modelautos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelauto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
            [
              'attribute' => 'image',
              'value' => Yii::getAlias('@imageImgUrl') . '/' . $model->image,
              'format' => ['image', ['width' => '350', 'height' => '250']],
            ],
            'type_id',
            'description:ntext',
            'brand_id',
        ],
    ]) ?>

</div>
