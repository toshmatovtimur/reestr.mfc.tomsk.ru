<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */

$this->title = 'Create Solutiontypes';
$this->params['breadcrumbs'][] = ['label' => 'Solutiontypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solutiontypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
