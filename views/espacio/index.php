<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Espacios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="espacio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Espacio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_espacio',
            'descripcion_espacio:ntext',
            'capacidad_espacio',
            'precio_espacio',
            'id_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
