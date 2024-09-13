<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Localityes $model */

$this->title = $model->locality_id;
$this->params['breadcrumbs'][] = ['label' => 'Localityes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="localityes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'locality_id' => $model->locality_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'locality_id' => $model->locality_id], [
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
            'locality_id',
            'localname',
        ],
    ]) ?>

</div>
