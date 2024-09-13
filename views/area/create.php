<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Areas $model */

$this->title = 'Добавить район';
$this->params['breadcrumbs'][] = ['label' => 'Районы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
