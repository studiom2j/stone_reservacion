<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_reservacion')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio_reservacion')->textInput() ?>

    <?= $form->field($model, 'fecha_fin_reservacion')->textInput() ?>

    <?= $form->field($model, 'precio_total_reservacion')->textInput() ?>

    <?= $form->field($model, 'id_espacio')->textInput() ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
