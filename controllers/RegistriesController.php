<?php

namespace app\controllers;

use app\db_models\Registryes;
use app\models\RegistriesSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistriesController implements the CRUD actions for Registryes model.
 */
class RegistriesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'view', 'update', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'update', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return \Yii::$app->user->identity->isUser();
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Registryes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RegistriesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Registryes model.
     * @param int $registry_id Registry ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($registry_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($registry_id),
        ]);
    }

    /**
     * Creates a new Registryes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Registryes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'registry_id' => $model->registry_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Registryes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $registry_id Registry ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($registry_id)
    {
        $model = $this->findModel($registry_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'registry_id' => $model->registry_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Registryes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $registry_id Registry ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($registry_id)
    {
        $this->findModel($registry_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Registryes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $registry_id Registry ID
     * @return Registryes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($registry_id)
    {
        if (($model = Registryes::findOne(['registry_id' => $registry_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
