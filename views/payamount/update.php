<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Payamounts $model */

$this->title = 'Update Payamounts: ' . $model->payamount_id;
$this->params['breadcrumbs'][] = ['label' => 'Payamounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payamount_id, 'url' => ['view', 'payamount_id' => $model->payamount_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payamounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
