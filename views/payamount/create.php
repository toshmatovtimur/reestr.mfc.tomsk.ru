<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\db_models\Payamounts $model */

$this->title = 'Create Payamounts';
$this->params['breadcrumbs'][] = ['label' => 'Payamounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payamounts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
