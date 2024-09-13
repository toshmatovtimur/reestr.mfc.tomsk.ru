<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */

$this->title = 'Update Solutiontypes: ' . $model->solutiontype_id;
$this->params['breadcrumbs'][] = ['label' => 'Solutiontypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solutiontype_id, 'url' => ['view', 'solutiontype_id' => $model->solutiontype_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solutiontypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
