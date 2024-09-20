<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Privilegies $model */

$this->title = 'Обновить льготу: ' . $model->privilegename;
$this->params['breadcrumbs'][] = ['label' => 'Льготы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->privilegename, 'url' => ['view', 'privilege_id' => $model->privilege_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="privilegies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
