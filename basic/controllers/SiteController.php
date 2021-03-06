<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Userform;
use app\models\Game;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'tocheck', 'Contact'],
                'rules' => [
                    [
                        'actions' => ['logout', 'tocheck', 'Contact'],
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTermofuse()
    {
        return $this->render('termofuse');
    }

    public function actionTest()
    {
        echo "Tested";
        die;
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionEarth()
    {
        return $this->render('earth');
    }

    public function actionGame()
    {
        $model = new game();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->goHome();
        }
        $query = game::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'Score' => SORT_DESC,]]
        ]);

        return $this->render('game',[
            'model'=>$model,
            'dataProvider' => $dataProvider,]);
    }

    public function actionTocheck()
    {
        return $this->render('tocheck/index');
    }

    public function actionUser()
    {
        $model = new  UserForm;
        if ($model->load(Yii::$app->request->post()) && $model-- > validate()) {
            yii::$app->session->setflash('success', 'you have entered the data correctly');
        }
        return $this->render('userform', array('model' => $model,));

    }

    public function actionupdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('hello');
        } else {
            return $this->render('about');
        }
    }


    protected function findModel($id)
    {
        if (($model = game::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
