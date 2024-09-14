<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Localityes $model */

$this->title = 'Обновить населенный пункт: ' . $model->localname;
$this->params['breadcrumbs'][] = ['label' => 'Населенные пункты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->localname, 'url' => ['view', 'locality_id' => $model->locality_id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="localityes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
