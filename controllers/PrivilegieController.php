<?php

namespace app\controllers;

use app\db_models\Privilegies;
use app\models\PrivilegieSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PrivilegieController implements the CRUD actions for Privilegies model.
 */
class PrivilegieController extends Controller
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
     * Lists all Privilegies models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PrivilegieSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Privilegies model.
     * @param int $privilege_id Privilege ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($privilege_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($privilege_id),
        ]);
    }

    /**
     * Creates a new Privilegies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Privilegies();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'privilege_id' => $model->privilege_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Privilegies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $privilege_id Privilege ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($privilege_id)
    {
        $model = $this->findModel($privilege_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'privilege_id' => $model->privilege_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Privilegies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $privilege_id Privilege ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($privilege_id)
    {
        $this->findModel($privilege_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Privilegies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $privilege_id Privilege ID
     * @return Privilegies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($privilege_id)
    {
        if (($model = Privilegies::findOne(['privilege_id' => $privilege_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
