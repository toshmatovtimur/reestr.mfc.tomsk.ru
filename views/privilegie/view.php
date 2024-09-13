<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Privilegies $model */

$this->title = $model->privilege_id;
$this->params['breadcrumbs'][] = ['label' => 'Privilegies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="privilegies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'privilege_id' => $model->privilege_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'privilege_id' => $model->privilege_id], [
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
            'privilege_id',
            'privilegename',
        ],
    ]) ?>

</div>
