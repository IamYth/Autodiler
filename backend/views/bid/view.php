<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bid */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bid-view">

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
            'number',
            'brand_id',
          //   [
          //    'label'=>'Бренд',
          //    'attribute'=>'brand_id',
          //    'value' => function($bid) {
          //    return $bid->brand->name;
          //    }
          //  ],
            'modelauto_id',
        ],
    ]) ?>

</div>
