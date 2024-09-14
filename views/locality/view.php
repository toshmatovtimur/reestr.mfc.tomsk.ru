<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\db_models\Localityes $model */

$this->title = $model->localname;
$this->params['breadcrumbs'][] = ['label' => 'Населенные пункты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="localityes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'locality_id' => $model->locality_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'locality_id' => $model->locality_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действиетльно хотите удалить населенный пункт?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'locality_id',
            'localname',
        ],
    ]) ?>

</div>
