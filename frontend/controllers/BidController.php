<?php

namespace frontend\controllers;
use Yii;
use common\models\Bid;
use common\models\BidSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class BidController extends \yii\web\Controller
{
  public function actionBid()
  {
  $model = new Bid();

  if ($model->load(Yii::$app->request->post()) && $model->save() ) {
      if ($model->rules()) {
          // form inputs are valid, do something here
          return $this->render('success', [
            'model' => $model,
          ]);
      }
  }

  return $this->render('bid', [
      'model' => $model,
  ]);
 }

}
