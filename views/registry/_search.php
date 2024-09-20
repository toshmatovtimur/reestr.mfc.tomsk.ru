<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RegistriesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="registryes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'registry_id') ?>

    <?= $form->field($model, 'applicant_fk') ?>

    <?= $form->field($model, 'serialandnumbersert') ?>

    <?= $form->field($model, 'dategetsert') ?>

    <?= $form->field($model, 'payamount_fk') ?>

    <?php // echo $form->field($model, 'solution_fk') ?>

    <?php // echo $form->field($model, 'dateandnumbsolutionsert') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'trek') ?>

    <?php // echo $form->field($model, 'mailingdate') ?>

    <?php // echo $form->field($model, 'dateoftheapp') ?>

    <?php // echo $form->field($model, 'usercreate_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
