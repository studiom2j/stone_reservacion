<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cliente',
            'nombre_cliente',
            'apellido_cliente',
            'cedula_cliente',
            'sexo_cliente',
            // 'email_cliente:email',
            // 'direccion_cliente:ntext',
            // 'fecha_nacimiento_cliente',
            // 'facebook_cliente',
            // 'twitter_cliente',
            // 'website_cliente',
            // 'nacionalidad_cliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
