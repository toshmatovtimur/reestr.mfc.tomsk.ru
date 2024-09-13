<?php

	namespace app\controllers;

	use app\models\UserIdentity;
    use yii\filters\AccessControl;
    use yii\web\Controller;

	class AdminController extends Controller
	{
        public function behaviors()
        {

            return [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['index'],
                    'rules' => [
                        [
                            'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['@'],
                            'matchCallback' => function ($rule, $action) {
                                return \Yii::$app->user->identity->isAdmin();
                            }
                        ],
                    ],
                ],
            ];
        }



        public function actionIndex()
        {
            return $this->render('index');
        }
	}