<?php

namespace app\controllers;

use app\db_models\Solutiontypes;
use app\models\SolutiontypeSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SolutiontypeController implements the CRUD actions for Solutiontypes model.
 */
class SolutiontypeController extends Controller
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
                            return \Yii::$app->user->identity->isAdmin();
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Solutiontypes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SolutiontypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Solutiontypes model.
     * @param int $solutiontype_id Solutiontype ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($solutiontype_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($solutiontype_id),
        ]);
    }

    /**
     * Creates a new Solutiontypes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Solutiontypes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'solutiontype_id' => $model->solutiontype_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Solutiontypes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $solutiontype_id Solutiontype ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($solutiontype_id)
    {
        $model = $this->findModel($solutiontype_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'solutiontype_id' => $model->solutiontype_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Solutiontypes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $solutiontype_id Solutiontype ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($solutiontype_id)
    {
        $this->findModel($solutiontype_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Solutiontypes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $solutiontype_id Solutiontype ID
     * @return Solutiontypes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($solutiontype_id)
    {
        if (($model = Solutiontypes::findOne(['solutiontype_id' => $solutiontype_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
