<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Privilegies $model */

$this->title = $model->privilegename;
$this->params['breadcrumbs'][] = ['label' => 'Льготы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="privilegies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'privilege_id' => $model->privilege_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'privilege_id' => $model->privilege_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить льготу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'privilege_id',
            'privilegename',
        ],
    ]) ?>

</div>
