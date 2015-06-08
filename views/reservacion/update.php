<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */

$this->title = 'Update Reservacion: ' . ' ' . $model->id_resrvacion;
$this->params['breadcrumbs'][] = ['label' => 'Reservacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_resrvacion, 'url' => ['view', 'id' => $model->id_resrvacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
