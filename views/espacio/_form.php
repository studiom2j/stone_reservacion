<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Espacio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="espacio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion_espacio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'capacidad_espacio')->textInput() ?>

    <?= $form->field($model, 'precio_espacio')->textInput() ?>

    <?= $form->field($model, 'id_categoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
