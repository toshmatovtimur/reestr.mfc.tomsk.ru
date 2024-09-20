<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Privilegies $model */

$this->title = 'Добавить льготу';
$this->params['breadcrumbs'][] = ['label' => 'Льготы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privilegies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
