<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Payamounts $model */

$this->title = $model->pay;
$this->params['breadcrumbs'][] = ['label' => 'Выплаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="payamounts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['Обновить', 'payamount_id' => $model->payamount_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['Удалить', 'payamount_id' => $model->payamount_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить выплату?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pay',
            'payamount_id',
        ],
    ]) ?>

</div>
