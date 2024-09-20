<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\db_models\Registryes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="registryes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicant_fk')->textInput() ?>

    <?= $form->field($model, 'serialandnumbersert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dategetsert')->textInput() ?>

    <?= $form->field($model, 'payamount_fk')->textInput() ?>

    <?= $form->field($model, 'solution_fk')->textInput() ?>

    <?= $form->field($model, 'dateandnumbsolutionsert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mailingdate')->textInput() ?>

    <?= $form->field($model, 'dateoftheapp')->textInput() ?>

    <?= $form->field($model, 'usercreate_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
