<?php

namespace app\controllers;

use app\db_models\Localityes;
use app\models\LocalitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LocalityController implements the CRUD actions for Localityes model.
 */
class LocalityController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Localityes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LocalitySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Localityes model.
     * @param int $locality_id Locality ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($locality_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($locality_id),
        ]);
    }

    /**
     * Creates a new Localityes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Localityes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'locality_id' => $model->locality_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Localityes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $locality_id Locality ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($locality_id)
    {
        $model = $this->findModel($locality_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'locality_id' => $model->locality_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Localityes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $locality_id Locality ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($locality_id)
    {
        $this->findModel($locality_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Localityes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $locality_id Locality ID
     * @return Localityes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($locality_id)
    {
        if (($model = Localityes::findOne(['locality_id' => $locality_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
