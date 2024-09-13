<?php

namespace app\controllers;

use app\db_models\Payamounts;
use app\models\PayamountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PayamountController implements the CRUD actions for Payamounts model.
 */
class PayamountController extends Controller
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
     * Lists all Payamounts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PayamountSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Payamounts model.
     * @param int $payamount_id Payamount ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($payamount_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($payamount_id),
        ]);
    }

    /**
     * Creates a new Payamounts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Payamounts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'payamount_id' => $model->payamount_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Payamounts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $payamount_id Payamount ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($payamount_id)
    {
        $model = $this->findModel($payamount_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payamount_id' => $model->payamount_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Payamounts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $payamount_id Payamount ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($payamount_id)
    {
        $this->findModel($payamount_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Payamounts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $payamount_id Payamount ID
     * @return Payamounts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($payamount_id)
    {
        if (($model = Payamounts::findOne(['payamount_id' => $payamount_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
