<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */

$this->title = 'Добавить решение';
$this->params['breadcrumbs'][] = ['label' => 'Решения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solutiontypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
