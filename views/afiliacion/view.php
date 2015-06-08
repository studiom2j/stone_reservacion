<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Afiliacion */

$this->title = $model->id_afiliacion;
$this->params['breadcrumbs'][] = ['label' => 'Afiliacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afiliacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_afiliacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_afiliacion], [
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
            'id_afiliacion',
            'fecha_afiliacion',
            'fecha_fin_afiliacion',
            'id_usuario',
            'activo:boolean',
        ],
    ]) ?>

</div>
