<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reservacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_resrvacion',
            'fecha_reservacion',
            'fecha_inicio_reservacion',
            'fecha_fin_reservacion',
            'precio_total_reservacion',
            // 'id_espacio',
            // 'id_usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
