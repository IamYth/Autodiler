<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;



use common\models\Brand;
use common\models\Bid;
use common\models\Modelauto;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $name = Brand::getLogo();
        return $this->render('index',['logoInView' => $name]);
    }

    public function actionModelauto($id)
    {
      $brands = Brand::find($id)->with('modelautos')->all();
      return $this->render('modelauto', ['brands' => $brands]);
    }

    public function actionBid()
    {
      //  $forms = Modelauto::find()->with('bs')->one();
      //  return $this->render('bid', ['forms' => $forms]);


      $model = new Bid();
      if ($model->load(Yii::$app->request->post()) && $model->save() ) {
          if ($model->rules()) {
              // form inputs are valid, do something here
              return $this->render('about', [
                'model' => $model,
              ]);
          }
      }

      return $this->render('bid', [
          'model' => $model,
      ]);
    }

}
