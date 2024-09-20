<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Payamounts $model */

$this->title = 'Обновить выплату: ' . $model->pay;
$this->params['breadcrumbs'][] = ['label' => 'Выплаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay, 'url' => ['view', 'payamount_id' => $model->payamount_id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="payamounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
