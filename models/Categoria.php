<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $id_categoria
 * @property string $nombre_categoria
 * @property boolean $activo
 *
 * @property Espacio[] $espacios
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_categoria'], 'required'],
            [['activo'], 'boolean'],
            [['nombre_categoria'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_categoria' => 'Id Categoria',
            'nombre_categoria' => 'Nombre Categoria',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEspacios()
    {
        return $this->hasMany(Espacio::className(), ['id_categoria' => 'id_categoria']);
    }
}
