<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_cliente')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fecha_nacimiento_cliente')->textInput() ?>

    <?= $form->field($model, 'facebook_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacionalidad_cliente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
