<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */

$this->title = $model->solutiontype_id;
$this->params['breadcrumbs'][] = ['label' => 'Solutiontypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="solutiontypes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'solutiontype_id' => $model->solutiontype_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'solutiontype_id' => $model->solutiontype_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'solutiontype_id',
            'solutionname',
        ],
    ]) ?>

</div>
