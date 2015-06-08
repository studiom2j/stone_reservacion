<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_resrvacion') ?>

    <?= $form->field($model, 'fecha_reservacion') ?>

    <?= $form->field($model, 'fecha_inicio_reservacion') ?>

    <?= $form->field($model, 'fecha_fin_reservacion') ?>

    <?= $form->field($model, 'precio_total_reservacion') ?>

    <?php // echo $form->field($model, 'id_espacio') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
