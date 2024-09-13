<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Areas $model */

$this->title = 'Create Areas';
$this->params['breadcrumbs'][] = ['label' => 'Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
