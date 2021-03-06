<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EspacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="espacio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_espacio') ?>

    <?= $form->field($model, 'descripcion_espacio') ?>

    <?= $form->field($model, 'capacidad_espacio') ?>

    <?= $form->field($model, 'precio_espacio') ?>

    <?= $form->field($model, 'id_categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
