<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservacion".
 *
 * @property integer $id_resrvacion
 * @property string $fecha_reservacion
 * @property string $fecha_inicio_reservacion
 * @property string $fecha_fin_reservacion
 * @property double $precio_total_reservacion
 * @property integer $id_espacio
 * @property integer $id_usuario
 *
 * @property Espacio $idEspacio
 * @property Usuario $idUsuario
 */
class Reservacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_reservacion', 'fecha_inicio_reservacion', 'fecha_fin_reservacion', 'precio_total_reservacion', 'id_espacio', 'id_usuario'], 'required'],
            [['fecha_reservacion', 'fecha_inicio_reservacion', 'fecha_fin_reservacion'], 'safe'],
            [['precio_total_reservacion'], 'number'],
            [['id_espacio', 'id_usuario'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_resrvacion' => 'Id Resrvacion',
            'fecha_reservacion' => 'Fecha Reservacion',
            'fecha_inicio_reservacion' => 'Fecha Inicio Reservacion',
            'fecha_fin_reservacion' => 'Fecha Fin Reservacion',
            'precio_total_reservacion' => 'Precio Total Reservacion',
            'id_espacio' => 'Id Espacio',
            'id_usuario' => 'Id Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEspacio()
    {
        return $this->hasOne(Espacio::className(), ['id_espacio' => 'id_espacio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
    }
}
