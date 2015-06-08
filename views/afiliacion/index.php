<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AfiliacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Afiliacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afiliacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Afiliacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_afiliacion',
            'fecha_afiliacion',
            'fecha_fin_afiliacion',
            'id_usuario',
            'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
