<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cliente') ?>

    <?= $form->field($model, 'nombre_cliente') ?>

    <?= $form->field($model, 'apellido_cliente') ?>

    <?= $form->field($model, 'cedula_cliente') ?>

    <?= $form->field($model, 'sexo_cliente') ?>

    <?php // echo $form->field($model, 'email_cliente') ?>

    <?php // echo $form->field($model, 'direccion_cliente') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento_cliente') ?>

    <?php // echo $form->field($model, 'facebook_cliente') ?>

    <?php // echo $form->field($model, 'twitter_cliente') ?>

    <?php // echo $form->field($model, 'website_cliente') ?>

    <?php // echo $form->field($model, 'nacionalidad_cliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
