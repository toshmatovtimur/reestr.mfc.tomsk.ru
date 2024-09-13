<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Payamounts $model */

$this->title = $model->payamount_id;
$this->params['breadcrumbs'][] = ['label' => 'Payamounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="payamounts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'payamount_id' => $model->payamount_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'payamount_id' => $model->payamount_id], [
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
            'payamount_id',
            'pay',
        ],
    ]) ?>

</div>
