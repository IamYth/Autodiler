<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ModelautoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modelautos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelauto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modelauto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
             'label'=>'Бренд',
             'attribute'=>'brand_id',
             'value' => function($modelauto) {
             return $modelauto->brand->name;
             }
           ],
           [
            'label'=>'Тип',
            'attribute'=>'type_id',
            'value' => function($modelauto) {
            return $modelauto->type->name;
            }
          ],
            'name',
            'slug',
            //'image',
            [
            'label' => 'Картинка',
            'format' => 'raw',
            'value' => function($modelauto){
                return Html::img(Url::toRoute($modelauto->image),[
                    'alt'=>'yii2',
                    'style' => 'width:15px;'
                ]);
            },
        ],
            'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
