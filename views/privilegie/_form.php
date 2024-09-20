<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\db_models\Privilegies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="privilegies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'privilegename')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
