<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Afiliacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="afiliacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_afiliacion')->textInput() ?>

    <?= $form->field($model, 'fecha_fin_afiliacion')->textInput() ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
