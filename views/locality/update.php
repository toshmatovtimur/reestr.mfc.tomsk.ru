<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Localityes $model */

$this->title = 'Update Localityes: ' . $model->locality_id;
$this->params['breadcrumbs'][] = ['label' => 'Localityes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->locality_id, 'url' => ['view', 'locality_id' => $model->locality_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="localityes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
