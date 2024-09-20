<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Registryes $model */

$this->title = 'Update Registryes: ' . $model->registry_id;
$this->params['breadcrumbs'][] = ['label' => 'Registryes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->registry_id, 'url' => ['view', 'registry_id' => $model->registry_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registryes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
