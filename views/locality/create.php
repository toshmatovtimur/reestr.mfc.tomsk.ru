<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Localityes $model */

$this->title = 'Добавить населенный пункт';
$this->params['breadcrumbs'][] = ['label' => 'Населенные пункты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localityes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
