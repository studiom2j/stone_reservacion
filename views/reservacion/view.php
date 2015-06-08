<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */

$this->title = $model->id_resrvacion;
$this->params['breadcrumbs'][] = ['label' => 'Reservacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_resrvacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_resrvacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_resrvacion',
            'fecha_reservacion',
            'fecha_inicio_reservacion',
            'fecha_fin_reservacion',
            'precio_total_reservacion',
            'id_espacio',
            'id_usuario',
        ],
    ]) ?>

</div>
