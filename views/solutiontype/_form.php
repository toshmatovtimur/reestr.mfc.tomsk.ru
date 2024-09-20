<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\db_models\Solutiontypes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="solutiontypes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'solutionname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
