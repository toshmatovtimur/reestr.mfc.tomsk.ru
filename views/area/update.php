<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Areas $model */

$this->title = 'Обновить район: ' . $model->areaname;
$this->params['breadcrumbs'][] = ['label' => 'Районы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->areaname, 'url' => ['view', 'area_id' => $model->area_id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="areas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
