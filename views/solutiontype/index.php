<?php

use app\db_models\Solutiontypes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\SolutiontypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Solutiontypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solutiontypes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Solutiontypes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'solutiontype_id',
            'solutionname',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Solutiontypes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'solutiontype_id' => $model->solutiontype_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
