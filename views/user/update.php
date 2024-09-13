<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Users $model */

$this->title = 'Редактирование: ' . $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fio, 'url' => ['view', 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
