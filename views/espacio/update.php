<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Espacio */

$this->title = 'Update Espacio: ' . ' ' . $model->id_espacio;
$this->params['breadcrumbs'][] = ['label' => 'Espacios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_espacio, 'url' => ['view', 'id' => $model->id_espacio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="espacio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
