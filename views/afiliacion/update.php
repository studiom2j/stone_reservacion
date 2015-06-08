<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Afiliacion */

$this->title = 'Update Afiliacion: ' . ' ' . $model->id_afiliacion;
$this->params['breadcrumbs'][] = ['label' => 'Afiliacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_afiliacion, 'url' => ['view', 'id' => $model->id_afiliacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="afiliacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
