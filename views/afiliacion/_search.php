<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AfiliacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="afiliacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_afiliacion') ?>

    <?= $form->field($model, 'fecha_afiliacion') ?>

    <?= $form->field($model, 'fecha_fin_afiliacion') ?>

    <?= $form->field($model, 'id_usuario') ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
