<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Registryes $model */

$this->title = 'Create Registryes';
$this->params['breadcrumbs'][] = ['label' => 'Registryes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registryes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
