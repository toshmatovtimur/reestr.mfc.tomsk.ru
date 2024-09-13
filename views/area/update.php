<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Areas $model */

$this->title = 'Update Areas: ' . $model->area_id;
$this->params['breadcrumbs'][] = ['label' => 'Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->area_id, 'url' => ['view', 'area_id' => $model->area_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
