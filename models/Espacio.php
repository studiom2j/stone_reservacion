<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "espacio".
 *
 * @property integer $id_espacio
 * @property string $descripcion_espacio
 * @property integer $capacidad_espacio
 * @property double $precio_espacio
 * @property integer $id_categoria
 *
 * @property Categoria $idCategoria
 * @property Reservacion[] $reservacions
 */
class Espacio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'espacio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion_espacio', 'capacidad_espacio', 'precio_espacio', 'id_categoria'], 'required'],
            [['descripcion_espacio'], 'string'],
            [['capacidad_espacio', 'id_categoria'], 'integer'],
            [['precio_espacio'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_espacio' => 'Id Espacio',
            'descripcion_espacio' => 'Descripcion Espacio',
            'capacidad_espacio' => 'Capacidad Espacio',
            'precio_espacio' => 'Precio Espacio',
            'id_categoria' => 'Id Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservacions()
    {
        return $this->hasMany(Reservacion::className(), ['id_espacio' => 'id_espacio']);
    }
}
