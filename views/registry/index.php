<?php

use app\db_models\Registryes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RegistriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Registryes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registryes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Registryes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'registry_id',
            'applicant_fk',
            'serialandnumbersert',
            'dategetsert',
            'payamount_fk',
            //'solution_fk',
            //'dateandnumbsolutionsert',
            //'comment:ntext',
            //'trek',
            //'mailingdate',
            //'dateoftheapp',
            //'usercreate_fk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Registryes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'registry_id' => $model->registry_id]);
                 }
            ],
        ],
    ]); ?>


</div>
