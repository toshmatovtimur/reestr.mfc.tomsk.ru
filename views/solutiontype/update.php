<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */

$this->title = 'Обновить решение: ' . $model->solutionname;
$this->params['breadcrumbs'][] = ['label' => 'Решения', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solutionname, 'url' => ['view', 'solutiontype_id' => $model->solutiontype_id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="solutiontypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
