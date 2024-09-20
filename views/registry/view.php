<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Registryes $model */

$this->title = $model->registry_id;
$this->params['breadcrumbs'][] = ['label' => 'Registryes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="registryes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'registry_id' => $model->registry_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'registry_id' => $model->registry_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'registry_id',
            'applicant_fk',
            'serialandnumbersert',
            'dategetsert',
            'payamount_fk',
            'solution_fk',
            'dateandnumbsolutionsert',
            'comment:ntext',
            'trek',
            'mailingdate',
            'dateoftheapp',
            'usercreate_fk',
        ],
    ]) ?>

</div>
